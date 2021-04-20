<?php

namespace App\Http\Controllers;

use App\Models\addons;
use App\Models\dropshipping_order;
use App\Models\invoices;
use Illuminate\Http\Request;
use App\Models\additionalfeature;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class DropshippingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addons = addons::all();
        return view('dropshipping',['addons'=>$addons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return ($request);

        /* try{
            request()->validate([
                'storeName' => 'required',
            ]);
        }catch (Exception $e){
            return $e;
        } */
        // return (dd($request));
        //return $request;
        if(isset($request->hosting)){
            if($request->hosting == "Remove 12 months Hosting"){
                $hosting = true;
            }
        }else{
          $hosting = false;  
        }

        $newDomainName = $request->newDomainName;
        $existingDomainName = $request->existingDomainName;
        $domainNameProvider = $request->domainNameProvider;

        $storeName = $request->storeName;
        $storeDescription = $request->storeDescription;
        $additionalNotes = $request->additionalNotes;
        $products = $request->products;
        $additionalFeature = $request->additionalFeature;//array

        $image = [];
        // Upload image
        try{
            if(isset($request->image)){
                for ($i=0; $i < sizeof($request->image); $i++) { 
                
                    $headers = array(
                        'Content-Type: text/html',
                      );
                        $picture = $request->file('image')[$i];
                        
                        $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                        //$image[] = $filename ;
    
                        $image[] = $picture->store('public');
    
                
                }
            }else{
                $image[] = "N/A";
            }
        }catch(Exception $e){
            return ($e);  
          }
        
                        
        $paymentMethod = $request->paymentType;
        $price = $request->price;
        $receipt_url = $request->receipt_url;
        $transaction_id = $request->transaction_id;
        
        //$product_data = json_encode($products);
        //$product_data = $products['productCategory'];
        //return ($products[0]);
        
        
        $productCategory = [];
        $productType = [];
        $noOfProducts = [];
        $profitMargin = [];
        
        
        foreach ($products as $product) {
            
             $productCategory[]=$product['productCategory'];
            $productType[]=$product['productType'];
            $noOfProducts[]=$product['noOfProducts'];
            $profitMargin[]=$product['profitMargin'];
            
        }
        
        // $productCategory = [];
        // for ($i=0; $i < sizeof($products); $i++) { 
        //     $productCategory[]=$products[$i]['productCategory'];
        // }
        // $productCategory = json_encode($productCategory);
        
        // //product type
        
        // for ($i=0; $i < sizeof($products); $i++) { 
        //     $productType[]=$products[$i]['productType'];
        // }
        // $productType = json_encode($productType);
        // //noOfProducts
        // $noOfProducts = [];
        // foreach ($products as $product) {
        //     $noOfProducts[]=$product[$i]['noOfProducts'];
        // }
        // $noOfProducts = json_encode($noOfProducts);
        // //profitMargin
        // $profitMargin = [];
        
        // // for ($i=0; $i < sizeof($products); $i++) { 
        // //     if(!isset($products[$i])){
        // //         continue;
        // //     }
        // //     $profitMargin[]=$products[$i]['profitMargin'];
        // // }
        
        // foreach ($products as $product) {
        //     $profitMargin[]=$product['profitMargin'];
        // }
        // $profitMargin = json_encode($profitMargin);

        $productCategory = json_encode($productCategory);
        $productType = json_encode($productType);
        $noOfProducts = json_encode($noOfProducts);
        $profitMargin = json_encode($profitMargin);
        
//        $additionalFeature = json_encode($request->optionalFeatures);

        $additionalFeature = [];

        if(isset($request->optionalFeatures)){
            foreach($request->optionalFeatures as $addon){
                $curr_addon = additionalfeature::where("featurename", "=", $addon)->latest()->get();
                if(isset($curr_addon[0])){
//                    $additionalFeature[] = ["title" => $curr_addon[0]->featurename, "imglink" => $curr_addon[0]->image, "description" => $curr_addon[0]->description ];
                    $additionalFeature[] = $curr_addon[0]->featurename ."~".$curr_addon[0]->image."~".$curr_addon[0]->description;
                }
            }
        }

        $additionalFeature = json_encode($additionalFeature);

        $promo_code = $request->promo;


        $invoice = new invoices();
        $invoice->type = "Dropshipping Package";
        $invoice->status = "Under review";
        $invoice->payment = $paymentMethod;
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

        $dropshipping_order = new dropshipping_order();
        $dropshipping_order->domain_name = $newDomainName;
        $dropshipping_order->existing_domain = $existingDomainName;
        $dropshipping_order->domain_provider = $domainNameProvider;
        $dropshipping_order->hosting = $hosting;
        $dropshipping_order->store_name = $storeName;
        $dropshipping_order->store_description = $storeDescription;
        $dropshipping_order->additional_notes = $additionalNotes;
        $dropshipping_order->productCategory = $productCategory;
        $dropshipping_order->productType = $productType;
        $dropshipping_order->noOfProducts = $noOfProducts;
        $dropshipping_order->profitMargin = $profitMargin;
        $dropshipping_order->invoice_id = $invoiceID;
        $dropshipping_order->addons_data = $additionalFeature;
        $dropshipping_order->image = json_encode($image);
        //return gettype($image);
        

        $dropshipping_order->save();
        DB::commit();

        $user = null;

        $userArr = User::where("id", "=", Auth::id())->get();
        foreach ($userArr as $_user){
            $user = $_user;
        }

       try{
            
            $mail_addons = [];
            $total_price = number_format($invoice->price, 2);
            if(isset($request->optionalFeatures)){
                foreach($request->optionalFeatures as $addon){
                    $curr_addon = addons::where("addonsname", "=", $addon)->latest()->get();
                    if(isset($curr_addon[0])){
                        $curr_addon[0]->name = $curr_addon[0]->addonsname;
                        $mail_addons[] = $curr_addon[0];
                        $invoice->price -= $curr_addon[0]->price;
                    }
                }
            }
            $promo = Promo::where('code', '=', $promo_code)->get();

            if(isset($promo[0])){
                $promo[0]->name = "Promo Code: ".$promo[0]->code." (".$promo[0]->discount."%)";
                $promo[0]->price = -number_format((((float)($total_price)/(1-0.01*(float)($promo[0]->discount)))-(float)$total_price), 2);
                $invoice->price -= $promo[0]->price;
                $mail_addons[] = $promo[0];
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
     * Display the specified resource.
     *
     * @param  \App\Models\dropshipping_order  $dropshipping_order
     * @return \Illuminate\Http\Response
     */
    public function show(dropshipping_order $dropshipping_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dropshipping_order  $dropshipping_order
     * @return \Illuminate\Http\Response
     */
    public function edit(dropshipping_order $dropshipping_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dropshipping_order  $dropshipping_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dropshipping_order $dropshipping_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dropshipping_order  $dropshipping_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(dropshipping_order $dropshipping_order)
    {
        //
    }
}
