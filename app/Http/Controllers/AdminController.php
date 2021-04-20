<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\additionalfeature;
use App\Models\webform;
use App\Models\invoices;
use App\Models\landing_orders;
use App\Models\dropshipping_order;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DataTables;
use App\Models\Promo;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\AdonsOrder;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
//use Zip;


class AdminController extends Controller
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
        $webformorders = webform::all()->count();
        $landingformorders = landing_orders::all()->count();
        $dropshippingorders = dropshipping_order::all()->count();
        $usercount = User::all()->count();

        $messages = Message::latest()->take(5)->get();
        $users = User::latest()->get();
        // dd($messages);
        return view('admin.index',['messages'=>$messages, 'users'=>$users, 'webformorders'=>$webformorders,'landingformorders'=>$landingformorders,'dropshippingorders'=>$dropshippingorders,'usercount'=>$usercount]);
    }
    public function showorders(Request $request){
        $invoices = invoices::get();
    //     if (\Request::route()->getName() == 'oldest' ){
    //         $invoices = invoices::orderBy('id','DESC')->get();
    //     }
    //     return view('adminorders',['invoices'=>$invoices]);
    // $invoices = invoices::latest()->get();
    // dd($invoices);
        if ($request->ajax()) {
            $invoices = invoices::latest()->get();
            return Datatables::of($invoices)
            ->addIndexColumn()
            ->addColumn('viewdetails', '<a href="/admin/orders/{{$id}}" class="edit btn btn-primary btn-sm">View</a>')
            ->addColumn('status', '<div class="form-group"><select class="form-control status" name="status" id="status">
                    <option hidden>{{$status}}</option>
                    <option disabled value="none">Select status</option>
                    <option value="UnderReview">Under Review</option>
                    <option value="Developing">Developing</option>
                    <option value="Completed">Completed</option>
                    <option value="Refunded">Refunded</option>

                    </select>
                    <br>
                    </div>')
                ->addColumn('action', '<button id={{$id}} type="submit" class="btnClick edit btn btn-primary btn-sm"><a >Save</a></button>')
                // ->addColumn('created_at', '{{$created_at}}')
                ->rawColumns(['viewdetails', 'action', 'created_at', 'status'])
            ->make(true);

        }

        return view('adminorders');

    }

    public function showmessages(){
        
        $messages = Message::latest()->get();
        $users = User::latest()->get();

        return view('admin.messages', ['messages' => $messages, 'users' => $users]);
    }

    public function removemessages(Request $request, $id){
        
        //
        try{
            DB::delete ('delete from messages where id = ?',[$id]);
            
            $messages = Message::latest()->get();
            $users = User::latest()->get();

            return view('admin.messages', ['messages' => $messages, 'users' => $users]);
           
        } catch(\Exception $e) {
            abort(500,"Record not Deleted.");
        }

        
    }

    public function storemessages(Request $request){
        
       /*  $messages = Message::latest()->get();
        $users = User::latest()->get(); */
        // dd($request);
        try{
            request()->validate([
                'userId' => 'required',
                'title' => 'required',
                'body' => 'required'
            ]);    
        }catch(Exception $e){ 
            abort(500, 'Please Provide Every Information Asked in the Form and Try Again.');
        }

        $userId = $request->userId;
        $title = $request->title;
        $body = $request->body;

        $message = new Message();
        $message->u_id = $userId;
        $message->title = $title;
        $message->body = $body;

        $message->save();

        $user = null;

        $userArr = User::where("id", "=", $userId)->get();
        foreach ($userArr as $_user){
            $user = $_user;
        }
        
        $mailer = new MailController;
        $result = $mailer->sendMessage($user, $title, $body);

        $messages = Message::latest()->get();
        $users = User::latest()->get();

        return view('admin.messages', ['messages' => $messages, 'users' => $users]);
    }

    public function downloads($id){
        try{
            return Storage::download('public/'.$id);
        }catch(Exception $e){
            return $e;
        }
    }

    public function download($id){
        // dd( "hello");
        //return Storage::download($id);
        // $zip = Zip::create('file.zip');
        $files = invoices::where('id','=',$id)->get();
        foreach ($files as $file){
           $content[] = $file->image;
            // $zip->add(Storage::get(storage_path('app/public/FoAE4FoemFEWG5Bee1bdb2YHfzRMtRctjYBOh33F.pptx')));
            
        }
        // dd($zip->listFiles()) ; 
        
        return Storage::download(json_decode($content[0])[0]);
        // $a[] =Storage::download(j    son_decode($content[0])[0]);
        // return ($a);

        //return Storage::download($image[0]);
        
    }

    public function receipt($id){
        $invoices = invoices::where('id','=',$id)->get();
        foreach ($invoices as $invoice){
        $user = null;

        $userArr = User::where("id", "=", Auth::id())->get();
        foreach ($userArr as $_user){
            $user = $_user;
        }
        try{
            
            $mail_addons = [];
            $total_price = number_format($invoice->price, 2);
            if(isset($request->additionalFeature)){
                foreach($request->additionalFeature as $addon){
                    $curr_addon = additionalfeature::where("featurename", "=", $addon)->latest()->get();
                    if(isset($curr_addon[0])){
                        $curr_addon[0]->name = $curr_addon[0]->featurename;
                        $mail_addons[] = $curr_addon[0];
                        $invoice->price -= $curr_addon[0]->price;
                    }
                }
            }

            
            $invoice->name = $invoice->type;
            $invoice->price = number_format($invoice->price, 2);
            array_unshift($mail_addons, $invoice);
           
        }catch(Exception $e){
            return($e);
        }
    }
        return view('receipt',['user'=>$user,'invoice'=>$invoice,'mail_addons'=>$mail_addons,'total_price'=>$total_price]);

    }

    public function delivery($id){
        $invoices = invoices::where('id','=',$id)->get();
        foreach ($invoices as $invoice){
            $user_id = $invoice->user_id;
            $upload = $invoice->image;
            $filename = $invoice->filename;
            $description = $invoice->description;
        }
        if(isset($upload)){
            $uploadimage = json_decode($upload);
            $filename = json_decode($filename);
            $description = json_decode($description);

        }else{
            $uploadimage = ["N/A"];
            $filename = ["N/A"];
            $description = ["N/A"];

        }

        //return $invoices;
        return view('delivery',['uploadimage'=>$uploadimage,'invoices'=>$invoices, 'filename'=>$filename,'description'=>$description]);

    }
    public function upload(Request $request,$id){
        $name = [];
        $invoices = invoices::where('id','=',$id)->get();
        foreach ($invoices as $invoice){
            $user_id = $invoice->user_id;
            $upload = $invoice->image;
            $name = $invoice->filename;
            $description = $invoice->description;


        }
        if(isset($upload)){
            $image = json_decode($upload);            
            $name = json_decode($name);
            $description = json_decode($description);


        }else{
            $image = ["N/A"];
            $name = ["N/A"];
            $description = ["N/A"];


        }
        $orderedit = invoices::find($id);
        //dd ($request->image[0]);
        //return (($request->image[0]->getClientOriginalExtension()));
         try{
            if(isset($request->image)){
               
                   for ($i=0; $i < sizeof($request->image); $i++) { 
                        $upload =strtoupper(($request->image[$i]->getClientOriginalExtension()));
                        //return $upload;
                        /* if ( $upload == "JPG" || $upload == "PNG" ||$upload == "GIF" || $upload == "WEBP"){
                                //return "ganesh";
                        
                                $picture = $request->file('image')[$i];
                                $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                                Image::make($picture)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                                $image[] = $filename;
                            
                            
                        }else */{
                            $headers = array(
                                'Content-Type: text/html',
                              );
                                $picture = $request->file('image')[$i];
                                $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                                //$image[] = $filename ;
                               // dd ($picture);

                                $image[] = $picture->store('public');
                               // dd ($image);
                                //$store= $picture->store($filename);
                                //return $image[0];
                                
                                //return Storage::download($image[0]);
                                
            
                                // echo asset('storage/'.$filename);
                                //return Storage::disk('public')->download($file->path);
                                //return Storage::download($filename,'ganesh',$headers);
                        }
                    }
                        
                    }else{
                        $image[] = "N/A";
                    }
                    
                    $name[] = $request->filename;
                    $description[] = $request->description;
                    //return $name;

                    $orderedit->image = $image;
                    $orderedit->filename = $name;
                    $orderedit->description = $description;
        //dd ($image);

                    $orderedit->save();
                    //dd( $request);
            
                    $userArr = User::where("id", "=", $orderedit->user_id)->get();
                    foreach ($userArr as $_user){
                        $user = $_user;
                    }
            
                    $mailer = new MailController;
                    $result = $mailer->sendUploadMessage($user, "You have a new file upload for Invoice #".$orderedit->id, "You can view the file upload from the order details of that Invoice by clicking Delivery button.");
               }catch(Exception $e){
                 return ($e);  
               }
        

        // dd($messages);
        return view('thankyouupload');


    }

    public function showusers(Request $request)
    {

        if ($request->ajax()) {

            $data = User::where('id','!=',Auth::id())->latest()->get();

            return Datatables::of($data)->make(true);
        }

        return view('admin.showusers');
    }

    public function orderdetails($id){
    
        //$dropshippingdetails = dropshipping_order::where('invoice_id','=',$id)->get(); 
        //return $dropshippingdetails;    
        $invoices = invoices::where('id','=',$id)->get();
        foreach ($invoices as $invoice){
            $user_id = $invoice->user_id;
            $upload = $invoice->image;
            $filename = $invoice->filename;
            $description = $invoice->description;
        }
        if(isset($upload)){
            $uploadimage = json_decode($upload);
            $filename = json_decode($filename);
            $description = json_decode($description);

        }else{
            $uploadimage = ["N/A"];
            $filename = ["N/A"];
            $description = ["N/A"];

        }
        
        //dd( $uploadimage);
        $userinfo = User::where('id','=',$user_id)->get();
        //return $invoices->user_id;
        $webformdetails = webform::where('invoice_id','=',$id)->get(); 
        $landingpagedetails = landing_orders::where('invoice_id','=',$id)->get(); 
        $dropshippingdetails = dropshipping_order::where('invoice_id','=',$id)->get();
        $addonsDetails = AdonsOrder::where('invoice_id','=',$id)->get();

        foreach($webformdetails as $webformdetail){
            $pagedataW = ($webformdetail->page_data);
            $pagedata = json_decode($pagedataW, true);
            //return $featuredata;
            $pagedataarray = [
                'homepagetitle'=> $pagedata["homePage"]["title"],
                'homepagecontent'=> $pagedata["homePage"]["content"],
                'homepageimage'=>$pagedata["homePage"]["image"],
                'page2title'=> $pagedata["Page2"]["title"],
                'page2content'=> $pagedata["Page2"]["content"],
                'page2image'=>$pagedata["Page2"]["image"],
                'page3title'=> $pagedata["page3"]["title"],
                'page3content'=> $pagedata["page3"]["content"],
                'page3image'=>$pagedata["page3"]["image"],
                'page4title'=> $pagedata["page4"]["title"],
                'page4content'=> $pagedata["page4"]["content"],
                'page4image'=>$pagedata["page4"]["image"],
                'page5title'=> $pagedata["page5"]["title"],
                'page5content'=> $pagedata["page5"]["content"],
                'page5image'=>$pagedata["page5"]["image"],
            ];

            $featuredataW = ($webformdetail);
            //return $featuredataW;

            $logoimage = json_decode($featuredataW['logoimage']);

            $featuredata= json_decode($featuredataW['feature_data']);
            $includedata= json_decode($featuredataW['include_data']);
            $addonsdata = json_decode($featuredataW['addons_data']);
 
        } 
        foreach($landingpagedetails as $landingpagedetail){

            $pagedataW = ($landingpagedetail->page_data);
            $pagedata = json_decode($pagedataW, true);
            //return $featuredata;
            $pagedataarray = ['homepagecontent'=> $pagedata["homePage"]["content"],
                                'homepageimage'=>$pagedata["homePage"]["image"] 
                                ];

            $featuredataW = ($landingpagedetail);
            //return $featuredataW;
            $logoimage = json_decode($featuredataW['logoimage']);

            $featuredata= json_decode($featuredataW['feature_data']);
            $includedata= json_decode($featuredataW['include_data']);
            $addonsdata = json_decode($featuredataW['addons_data']);
 
        }
        foreach($dropshippingdetails as $dropshippingdetail){
            $product = ($dropshippingdetail);
            $productCategory= json_decode($product['productCategory']);
            $productType= json_decode($product['productType']);
            $noOfProducts= json_decode($product['noOfProducts']);
            $profitMargin= json_decode($product['profitMargin']);
            $addonsdata = json_decode($product['addons_data']);
            $image = json_decode($product['image']);

        //return $uploadimage;
 
        }
        $addonsOrderData = [];

        foreach($addonsDetails as $addonsDetail){

            $addonsOrderData = ["types" => json_decode($addonsDetail['type']), "descriptions" => json_decode($addonsDetail['description'])];
            
        }
        // return $featuredata;
        //return $uploadimage;
        if(count($webformdetails)){
            return view('adminorderdetails',['dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'pagedataarray'=>$pagedataarray,'featuredata'=>$featuredata,'includedata'=>$includedata,'addonsdata'=>$addonsdata,'userinfo'=>$userinfo,'logoimage'=>$logoimage, "addonsOrderData" => $addonsOrderData,'uploadimage'=>$uploadimage,'filename'=>$filename,'description'=>$description]);

        }
        if(count($landingpagedetails)){
            // return $landingpagedetails;
            return view('adminorderdetails',['dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'pagedataarray'=>$pagedataarray,'featuredata'=>$featuredata,'includedata'=>$includedata,'addonsdata'=>$addonsdata,'userinfo'=>$userinfo,'logoimage'=>$logoimage,"addonsOrderData" => $addonsOrderData,'uploadimage'=>$uploadimage, 'filename'=>$filename,'description'=>$description]);
        }
        //return view('adminorderdetails',['webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'pagedataarray'=>$pagedataarray,'featuredata'=>$featuredata,'includedata'=>$includedata]);
        if(count($dropshippingdetails)){
            // return $landingpagedetails;
             return view('adminorderdetails',['image'=>$image, 'dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'addonsdata'=>$addonsdata,'productCategory'=>$productCategory,'productType'=>$productType,'noOfProducts'=>$noOfProducts,'profitMargin'=>$profitMargin,'userinfo'=>$userinfo, "addonsOrderData" => $addonsOrderData,'uploadimage'=>$uploadimage,'filename'=>$filename,'description'=>$description]);
         }
         if(count($addonsOrderData)){
            // return $landingpagedetails;
             return view('adminorderdetails',['dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'userinfo'=>$userinfo, "addonsOrderData" => $addonsOrderData,'uploadimage'=>$uploadimage,'filename'=>$filename,'description'=>$description]);
         }


    
    }
    public function orderedit(Request $request,$id){
        // dd(request('status'));
        $orderedit = invoices::find($id);
        $orderedit->status = request('status');
        $orderedit->save();
        $invoices = invoices::get();

        $user = User::where('id','=',$orderedit[0]->user_id)->get();

        $link = url("order-details/".$id);

        $mailer = new MailController;
        $result = $mailer->sendStatusUpdate($user, $orderedit[0], $link);

        return view('adminorders',['invoices'=>$invoices]);
    }

    public function showcustomorder(){
        
        $users = User::latest()->get();
        return view('admin.customorders', ['users' => $users]);
    }

    public function storecustomorder(Request $request){
        // return  ($request);
        // try{
        //     request()->validate([
        //         'title' => 'required',
        //         'price' => 'required',
        //         'description' => 'required',
        //     ]);    
        // }catch(Exception $e){ 
        //     abort(500, 'Please Provide Every Information Asked in the Form and Try Again.');
        // }

        if($request->email){
            $to_email = $request->email;
        }else{
            $userId = $request->userId;
            $userArr = User::where("id", "=", $userId)->get();
            foreach ($userArr as $_user){
                $user = $_user;
            }
            $to_email = $user->email;
        }
        
        $link = "";
        if($request->type=="Web Package"){
            $link = env('APP_URL')."/web-form";
        }elseif($request->type=="Landing Page Package"){
            $link = env('APP_URL')."/landing-form";
        }else{
            $link = env('APP_URL')."/dropshipping-form";
        }
        
        $mailer = new MailController;
        $result = $mailer->sendCustomOrder($to_email, $request->type, $link,$request->title, $request->price, $request->description);
        
        $users = User::latest()->get();
        return view('admin.customorders', ['users' => $users]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
