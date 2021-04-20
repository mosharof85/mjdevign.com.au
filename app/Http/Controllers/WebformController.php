<?php

namespace App\Http\Controllers;

use App\Models\webform;
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
use PHPMailer\PHPMailer\PHPMailer;
use Carbon\Carbon;
use App\Models\Promo;

// use PHPMailer\PHPMailer\Exception;

class WebformController extends Controller
{
/*     public function __construct()
    {
        $this->middleware('auth');
    } */

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
        return view('webform',['features'=>$features, 'includes' => $includes, 'pagetypes' => $pagetype]);
        //landing order view
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
        // return dd($request);
        // try{
        request()->validate([
            'businessName' => 'required',
            'aboutBusiness' => 'required',
            'textContent' => 'required'
        ]);
        // }catch (Exception $e){
            // return $e;
        // }

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
        $businessName = $request->businessName;
        $haveLogo = $request->isLogo;
        $aboutBusiness = $request->aboutBusiness;
        $webUsedFor = $request->webUsedFor;

        //Home Page
        $homePageContent = $request->textContent;
        /* if(isset($request->image)){
            for ($i=0; $i < sizeof($request->image); $i++) { 
            
                $image = $request->file('image')[$i];
                $filename = time() . $image->getClientOriginalExtension();
                //$filename = time() . pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME).'.' . $image->getClientOriginalExtension();
                Image::make($image)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                $homePageImage[] = $filename;
            }
        }else{
        $homePageImage[] = "N/A";
        } */
        try{
            if(isset($request->image)){
                for ($i=0; $i < sizeof($request->image); $i++) { 
                
                    $headers = array(
                        'Content-Type: text/html',
                      );
                        $picture = $request->file('image')[$i];
                        $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                        //$image[] = $filename ;
    
                        $homePageImage[] = $picture->store('public');
    
                
                }
            }else{
                $homePageImage[] = "N/A";
            }
        }catch(Exception $e){
            return ($e);  
          }
        //return $homePageImage;
        // return $includeOnPage = $request->includeOnPage;//array

        //Page 2
        $page2Type = null;
        $page2Content = null;
        $page2Image = [];
        if(isset($request->page_2) && $request->page_2["pageType"]!='hide'){

            $page2 = $request->page_2; //list
        
            $page2Type = isset($page2["pageType"]) ? $page2["pageType"] : "N/A";
            
            $page2Content = isset($page2[$page2Type]['content']) ? $page2[$page2Type]['content'] : "N/A";
            //return sizeof($page2[$page2Type]["image"]);
            /* if(isset($page2[$page2Type]["image"])){
                for ($i=0; $i < sizeof($page2[$page2Type]["image"]); $i++) { 
                    $image = $request->file()['page_2'][$page2Type]['image'][$i];
                    $filename = time() . $image->getClientOriginalExtension();
                    //$filename = time() . pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME).'.' . $image->getClientOriginalExtension();
                    Image::make($image)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                    $page2Image[] = $filename;
                }
            }else{
                $page2Image[] = "N/A";
            } */
            try{
                if(isset($page2[$page2Type]["image"])){
                    for ($i=0; $i < sizeof($page2[$page2Type]["image"]); $i++) { 
                    
                        $headers = array(
                            'Content-Type: text/html',
                          );
                            $picture =  $request->file()['page_2'][$page2Type]['image'][$i];
                            $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                            //$image[] = $filename ;
        
                            $page2Image[] = $picture->store('public');
        
                    
                    }
                }else{
                    $page2Image[] = "N/A";
                }
            }catch(Exception $e){
                return ($e);  
              }

        }
        
        
        //page 3
        $page3Type = null;
        $page3Content = null;
        $page3Image = [];
        if(isset($request->page_3) && $request->page_3["pageType"]!='hide'){
            $page3 = $request->page_3; //list
            
            $page3Type = isset($page3["pageType"]) ? $page3["pageType"] : "N/A";
            
            $page3Content = isset($page3[$page3Type]["content"]) ? $page3[$page3Type]["content"] : "N/A";
            
            /* if(isset($page3[$page3Type]["image"])){
                for ($i=0; $i < sizeof($page3[$page3Type]["image"]); $i++) { 
                
                    $image = $request->file()['page_3'][$page3Type]['image'][$i];
                    $filename = time() . $image->getClientOriginalExtension();
                    //$filename = time() . pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME).'.' . $image->getClientOriginalExtension();
                    Image::make($image)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                    $C[] = $filename;
                
                }
            }else{
                $page3Image[] = "N/A";
            } */
            try{
                if(isset($page3[$page3Type]["image"])){
                    for ($i=0; $i < sizeof($page3[$page3Type]["image"]); $i++) { 
                    
                        $headers = array(
                            'Content-Type: text/html',
                          );
                            $picture = $request->file()['page_3'][$page3Type]['image'][$i];
                            $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                            //$image[] = $filename ;
        
                            $page3Image[] = $picture->store('public');
        
                    
                    }
                }else{
                    $page3Image[] = "N/A";
                }
            }catch(Exception $e){
                return ($e);  
              }
        }

        //page 4
        $page4Type = null;
        $page4Content = null;
        $page4Image = [];
        if(isset($request->page_4) && $request->page_4["pageType"]!='hide'){

            $page4 = $request->page_4; //list
            
            $page4Type = $page4["pageType"];
            
            $page4Content = $page4[$page4Type]["content"];
            /* if(isset($page4[$page4Type]["image"])){
                for ($i=0; $i < sizeof($page4[$page4Type]["image"]); $i++) { 
                
                    $image = $request->file()['page_4'][$page4Type]['image'][$i];
                    $filename = time() . $image->getClientOriginalExtension();
                    //$filename = time() . pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME).'.' . $image->getClientOriginalExtension();
                    Image::make($image)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                    $page4Image[] = $filename;
                
                }
            }else{
                $page4Image[] = "N/A";
            } */
            try{
                if(isset($page4[$page4Type]["image"])){
                    for ($i=0; $i < sizeof($page4[$page4Type]["image"]); $i++) { 
                    
                        $headers = array(
                            'Content-Type: text/html',
                          );
                            $picture = $request->file()['page_4'][$page4Type]['image'][$i];
                            $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                            //$image[] = $filename ;
        
                            $page4Image[] = $picture->store('public');
        
                    
                    }
                }else{
                    $page4Image[] = "N/A";
                }
            }catch(Exception $e){
                return ($e);  
              }
        }

        //page 5
        $page5Type = null;
        $page5Content = null;
        $page5Image = [];

        if(isset($request->page_5) && $request->page_5["pageType"]!='hide'){
            
            $page5 = $request->page_5; //list
            
            $page5Type = $page5["pageType"];

            $page5Content = $page5[$page5Type]["content"];
            
            /* if(isset($page5[$page5Type]["image"])){
                for ($i=0; $i < sizeof($page5[$page5Type]["image"]); $i++) { 
                
                    $image = $request->file()['page_5'][$page5Type]['image'][$i];
                    $filename = time() . $image->getClientOriginalExtension();
                    //$filename = time() . pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME).'.' . $image->getClientOriginalExtension();
                    Image::make($image)->fit(400)->save( public_path('/images/uploads/' . $filename ));
                    $page5Image[] = $filename;
                
                }
            }else{
                $page5Image[] = "N/A";
            } */
            try{
                if(isset($page5[$page5Type]["image"])){
                    for ($i=0; $i < sizeof($page5[$page5Type]["image"]); $i++) { 
                    
                        $headers = array(
                            'Content-Type: text/html',
                          );
                            $picture = $request->file()['page_5'][$page5Type]['image'][$i];
                            $filename = time() . pathinfo($picture->getClientOriginalName(),PATHINFO_FILENAME).'.' . $picture->getClientOriginalExtension();
                            //$image[] = $filename ;
        
                            $page5Image[] = $picture->store('public');
        
                    
                    }
                }else{
                    $page5Image[] = "N/A";
                }
            }catch(Exception $e){
                return ($e);  
              }
        }
        
        $page_data = json_encode([
            "homePage" => ["title" => "Home Page", "content" => $homePageContent, "image" => $homePageImage],
            "Page2" => ["title" => $page2Type, "content" => $page2Content, "image" => $page2Image],
            "page3" => ["title" => $page3Type, "content" => $page3Content, "image" => $page3Image],
            "page4" => ["title" => $page4Type, "content" => $page4Content, "image" => $page4Image],
            "page5" => ["title" => $page5Type, "content" => $page5Content, "image" => $page5Image]
        ]);

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
        $invoice->type = "Website Package";
        $invoice->status = "Under review";
        $invoice->payment = $request->paymentType;
        $invoice->receipt_url = $request->receipt_url;
        $invoice->transaction_id = $request->transaction_id;
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
       

        if ($request->price){
            $invoice->price = $request->price;
        }else{
            $invoice->price = 0;

        }
        

        DB::beginTransaction();

        try{
            $invoice->save();
        } catch(\Exception $e) {
            return $e;
            DB::rollback();
        }

        $invoiceID = invoices::max('id');
        
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
        $webform = new webform();
        $webform->domain_name = $newDomainName;
        $webform->existing_domain = $existingDomainName;
        $webform->domain_provider = $domainNameProvider;
        $webform->hosting = $hosting;
        $webform->web_name = $businessName;
        $webform->isLogo = $haveLogo;
        $webform->about_business = $aboutBusiness;
        $webform->web_for = $webUsedFor;
        $webform->invoice_id = $invoiceID;
        $webform->page_data = $page_data;
        $webform->feature_data = $additionalFeature;
        $webform->include_data = $includeOnPage;
        $webform->logoimage = $logoimage;


        $webform->save();

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

    public function storemobileapp(Request $request){
        
        $fname = $request->fname;
        $sname = $request->sname;
        $email = $request->email;
        $mobile = $request->mobile;
        $idea = $request->idea;
        // return $request;
        $mailer = new MailController;
        

        try{
            $result = $mailer->sendFormData($fname." ".$sname, $email, $mobile, $idea, "Mobile App");
            return $result;

        }catch(Exception $e){
            return($e);
        }
//        return view('home');
    }

    public function storewebapp(Request $request){
        
        $fname = $request->fname;
        $sname = $request->sname;
        $email = $request->email;
        $mobile = $request->mobile;
        $idea = $request->idea;
        // return $request;

        $mailer = new MailController;
        try{
            $result  = $mailer->sendFormData($fname." ".$sname, $email, $mobile, $idea, "Web App");
            return $result;
        }catch(Exception $e){
            return($e);
        }
//        return view('home');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\webform  $webform
     * @return \Illuminate\Http\Response
     */
    public function show(webform $webform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\webform  $webform
     * @return \Illuminate\Http\Response
     */
    public function edit(webform $webform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\webform  $webform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, webform $webform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\webform  $webform
     * @return \Illuminate\Http\Response
     */
    public function destroy(webform $webform)
    {
        //
    }
}
