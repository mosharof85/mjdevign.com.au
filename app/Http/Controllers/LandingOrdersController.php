<?php

namespace App\Http\Controllers;


use App\Models\landing_orders;
use App\Models\invoices;
use Illuminate\Http\Request;
use App\Models\additionalfeature;
use App\Models\addons;
use Illuminate\Support\Facades\Auth;
use App\Models\includeonpage;
use App\Models\pagetype;
use App\Models\User;
use DB;
use Exception;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Message;
use Carbon\Carbon;
use App\Models\Promo;




class LandingOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = additionalfeature::all();
        $includes = includeonpage::all();
        $pagetype = pagetype::all();
        //show web form controller index page.
        // return ['features'=>$features, 'includes' => $includes, 'pagetypes' => $pagetype];
        return view('landingOrder',['features'=>$features, 'includes' => $includes, 'pagetypes' => $pagetype]);
        // //landing order view
        // return view('landingOrder',['features'=>$features]);
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
        /* try{
            request()->validate([
                'websitename' => 'required',
                'aboutBusiness' => 'required',
                'writeContent' => 'required'
            ]);
        }catch (Exception $e){
            return $e;
        } */
        //return (($request));
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

        $websitename = $request->websitename;
        $aboutBusiness = $request->aboutBusiness;
        $landingPageUse = $request->landingPageUse;

        $writeContent = $request->writeContent;
        $addpages = $request->addpages;//array
//        $additionalFeature = $request->additionalFeature;//array
        $includeOnPage = $request->includeOnPage;//array

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
        
        
        $logoimage = [];
        // Upload image
        try{
            if(isset($request->logoimage)){
                for ($i=0; $i < sizeof($request->logoimage); $i++) { 
                
                    $headers = array(
                        'Content-Type: text/html',
                      );
                        $picture = $request->file('logoimage')[$i];
                        $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                        //$image[] = $filename ;
    
                        $logoimage[] = $picture->store('public');
    
                
                }
            }else{
                $logoimage[] = "N/A";
            }
        }catch(Exception $e){
            return ($e);  
          }
        
        $logoimage = json_encode($logoimage);
        //return json_decode($logoimage)[0];

        $paymentMethod = $request->paymentType;
        $price = $request->price;
        
        $page_data = json_encode(["homePage" => ["content" => $writeContent, "image" => $image]]);
        
        $additionalFeature = [];

        if(isset($request->additionalFeature)){
            foreach($request->additionalFeature as $addon){
                $curr_addon = additionalfeature::where("featurename", "=", $addon)->latest()->get();
                if(isset($curr_addon[0])){
//                    $additionalFeature[] = ["title" => $curr_addon[0]->featurename, "imglink" => $curr_addon[0]->image, "description" => $curr_addon[0]->description ];
                    $additionalFeature[] = $curr_addon[0]->featurename ."~".$curr_addon[0]->image."~".$curr_addon[0]->description;
                }
            }
        }

        $additionalFeature = json_encode($additionalFeature);

        $includeOnPage = json_encode($request->includeOnPage);

        $promo_code = $request->promo;


        $invoice = new invoices();
        $invoice->type = "Landing Page Package";
        $invoice->status = "Under review";
        $invoice->payment = $paymentMethod;
        $invoice->price = $price;
        $invoice->receipt_url = $request->receipt_url;
        $invoice->transaction_id = $request->transaction_id;
        $user = Auth::user();
        $invoice->user_name = $user->name;
        $invoice->email = $user->email;
        $invoice->user_id = $user->id;
        $date = Carbon::now();
        $date->addDays(7);
        $invoice->due_date = $date;
        $invoice->created_date = Carbon::now();$invoice->image = 'N/A';         $invoice->filename = 'N/A';         $invoice->description = 'N/A';

        try{
            $invoice->save();
        } catch(\Exception $e) {
            return $e;
            DB::rollback();
        }

        $invoiceID = invoices::max('id');

        $landing_orders = new landing_orders();
        $landing_orders->domain_name = $newDomainName;
        $landing_orders->existing_domain = $existingDomainName;
        $landing_orders->domain_provider = $domainNameProvider;
        $landing_orders->hosting = $hosting;
        $landing_orders->web_name = $websitename;
        $landing_orders->isLogo = $request->havelogo;
        $landing_orders->about_business = $aboutBusiness;
        $landing_orders->web_for = $landingPageUse;
        $landing_orders->invoice_id = $invoiceID;
        $landing_orders->page_data = $page_data;
        $landing_orders->feature_data = $additionalFeature;
        $landing_orders->include_data = $includeOnPage;
        $landing_orders->logoimage = $logoimage;

        $landing_orders->save();

        DB::commit();

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

            $promo = Promo::where('code', '=', $promo_code)->get();

            if(isset($promo[0])){
                $promo[0]->name = "Promo Code: ".$promo[0]->code." (".$promo[0]->discount."%)";
                //$promo[0]->price = -number_format((((float)($promo[0]->discount)/100) * (float)$total_price), 2);
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
     * @param  \App\Models\landing_orders  $landing_orders
     * @return \Illuminate\Http\Response
     */
    public function show(landing_orders $landing_orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landing_orders  $landing_orders
     * @return \Illuminate\Http\Response
     */
    public function edit(landing_orders $landing_orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\landing_orders  $landing_orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, landing_orders $landing_orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landing_orders  $landing_orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(landing_orders $landing_orders)
    {
        //
    }
}
