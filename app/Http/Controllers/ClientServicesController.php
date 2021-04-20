<?php

namespace App\Http\Controllers;

use App\Models\addons;
use App\Models\AdonsOrder;
use App\Models\webform;
use App\Models\landing_orders;
use App\Models\dropshipping_order;
use App\Models\client_services;
use App\Models\invoices;
use Carbon\Carbon;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

// use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:ROLE_ADMIN');
    }
    public function index()
    {
        //
        $addons = addons::all();
        $messages = Message::where('u_id','=',Auth::id())->latest()->get();
        $invoices = invoices::where('user_id','=',Auth::id())->latest()->get();
        $userdetails = User::where('id','=',Auth::id())->get();
        
        // if ($request->ajax()) {

        //     $data = invoices::where('user_id','=',Auth::id())->get();
        //     return Datatables::of($data)
        //         // ->addIndexColumn()
        //         ->addColumn('viewdetails', '<a href="/order-details/{{$id}}" class="edit btn btn-primary btn-sm">View</a>')
        //         ->rawColumns(['viewdetails'])
        //         ->make(true);
        // }
        return view('clientportal',['invoices'=>$invoices, 'addons' => $addons, 'userdetails'=>$userdetails, 'messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateuserinfo(Request $request,$id)
    {
        //return $id;
        $userdetails = User::where('id','=',$id)->get();
        foreach ($userdetails as $userdetail){
            $name = $userdetail->name;
            $lastname = $userdetail->lastname;
            $email = $userdetail->email;
            $country = $userdetail->country;
            $city = $userdetail->city;
            $phonenumber = $userdetail->phonenumber;
        }
        
        if($request->name){
            $name=$request->name;
        }
        if($request->lastname){
            $lastname=$request->lastname;
        }if($request->email){
            $email=$request->email;
        }if($request->country){
            $country=$request->country;
        }if($request->city){
            $city=$request->city;
        }if($request->phonenumber){
            $phonenumber=$request->phonenumber;
        }

        $Update = User::find($id);
        $Update->name = $name;
        $Update->lastname = $lastname;
        $Update->email = $email;
        $Update->phonenumber = $phonenumber;
        $Update->country = $country;
        $Update->city = $city;
        $Update->save();
        $addons = addons::all();
        $messages = Message::where('u_id','=',Auth::id())->latest()->get();
        $invoices = invoices::where('user_id','=',Auth::id())->get();
        $userdetails = User::where('id','=',Auth::id())->get();
        
        // if ($request->ajax()) {

        //     $data = invoices::where('user_id','=',Auth::id())->get();
        //     return Datatables::of($data)
        //         // ->addIndexColumn()
        //         ->addColumn('viewdetails', '<a href="/order-details/{{$id}}" class="edit btn btn-primary btn-sm">View</a>')
        //         ->rawColumns(['viewdetails'])
        //         ->make(true);
        // }
        return view('clientportal',['invoices'=>$invoices, 'addons' => $addons, 'userdetails'=>$userdetails, 'messages' => $messages]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addonsorderStore(Request $request)
    {
        
        $price = $request->price;
        $receipt_url = $request->receipt_url;
        $transaction_id = $request->transaction_id;
        $invoice = new invoices();
        $invoice->type = "Add ons";
        $invoice->status = "Under review";
        $invoice->payment = $request->paymentType;
        $invoice->price = $price;
        $invoice->receipt_url = $receipt_url;
        $invoice->transaction_id = $transaction_id;
        $user = Auth::user();
        $invoice->user_name = $user->name;
        $invoice->email = $user->email;
        $invoice->user_id = $user->id;
        $date = Carbon::now();
        $date->addDays(7);
        $invoice->due_date = $date;
        $invoice->created_date = Carbon::now();
        $invoice->image = 'N/A';
        $invoice->filename = 'N/A';
        $invoice->description = 'N/A';
        DB::beginTransaction();

        try{
            $invoice->save();
        } catch(\Exception $e) {
            return $e;
            DB::rollback();
        }

        $invoiceID = invoices::max('id');


        $adonsOrder = new AdonsOrder();
        $adonsOrder->invoice_id = $invoiceID;

        $types = [];
        $descriptions = [];

        foreach ($request->addons as $addon){
            $types[] = json_decode($addon)->name;
            $descriptions[] = json_decode($addon)->description;
        }

        $adonsOrder->type = json_encode($types);
        $adonsOrder->description = json_encode($descriptions);

        try{
            $adonsOrder->save();
        }catch (Exception $e){
            return dd($e);
        }

        DB::commit();

        try{
            
            $mail_addons = [];
            $total_price = number_format($invoice->price, 2);
            if(isset($types)){
                foreach($types as $addon){
                    $curr_addon = addons::where("addonsname", "=", $addon)->latest()->get();
                    if(isset($curr_addon[0])){
                        $mail_addons[] = $curr_addon[0];
                        $invoice->price -= $curr_addon[0]->price;
                    }
                }
            }
            $invoice->name = $invoice->type;
            $invoice->price = number_format($invoice->price, 2);
            array_unshift($mail_addons, $invoice);
            $mailer = new MailController;
            $result = $mailer->sendInvoice($user, $invoice, $invoice->receipt_url, $mail_addons, $total_price);
        }catch(Exception $e){
            return($e);
        }  

        return view('thankyou');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addonsStore(Request $request)
    {
        //return ($request);
        //
        $type = "";
        $invoice_id = $request->invoice_id;
        $addons = $request->addons;

        
        $order = landing_orders::where('invoice_id', '=', $invoice_id)->get();
        $type = "Landing Package";

        if(!$order->count()){
            $order = webform::where('invoice_id', '=', $invoice_id)->get();
            $type = "Website Package";
        }

        if(!$order->count()){
            $order = dropshipping_order::where('invoice_id', '=', $invoice_id)->get();
            $type = "Dropshipping Package";
        }

        if(!$order->count()){
            abort(500);
        }


        $order_addons = (array)json_decode($order[0]->addons_data);

        $order_addons = array_merge($order_addons, $addons);
        
        switch ($type){
            case 'Dropshipping Package':
                DB::update('update dropshipping_orders set addons_data = ? where id = ?', [(String)json_encode($order_addons), $order[0]->id]);
                break;
            case 'php artisan view:clear':
                DB::update('update landing_orders set addons_data = ? where id = ?', [(String)json_encode($order_addons), $order[0]->id]);
                break;
            case 'Website Package':
                DB::update('update webforms set addons_data = ? where id = ?', [(String)json_encode($order_addons), $order[0]->id]);
                break;        
        }

        //

        $user = null;

        $userArr = User::where("id", "=", Auth::id())->get();
        foreach ($userArr as $_user){
            $user = $_user;
        }

        $invoice = invoices::where('id', '=', $invoice_id)->get();


        $mailer = new MailController;
        $result = $mailer->sendInvoice($user, $invoice[0], $invoice[0]->receipt_url);

        return view('thankyou');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client_services  $client_services
     * @return \Illuminate\Http\Response
     */
    public function show(client_services $client_services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client_services  $client_services
     * @return \Illuminate\Http\Response
     */
    public function edit(client_services $client_services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client_services  $client_services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client_services $client_services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client_services  $client_services
     * @return \Illuminate\Http\Response
     */
    public function destroy(client_services $client_services)
    {
        //
    }
}
