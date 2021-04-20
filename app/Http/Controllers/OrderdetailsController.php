<?php

namespace App\Http\Controllers;

use App\Models\orderdetails;
use App\Models\webform;
use App\Models\invoices;
use App\Models\landing_orders;
use App\Models\dropshipping_order;
use App\Models\AdonsOrder;
use App\Models\Promo;
use App\Models\additionalfeature;
use App\Models\includeonpage;
use App\Models\addons;


use App\Models\admin;

use Illuminate\Http\Request;

class OrderdetailsController extends Controller
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
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$dropshippingdetails = dropshipping_order::where('invoice_id','=',$id)->get(); 
        $landingpagedetails = landing_orders::where('invoice_id','=',$id)->get(); 
        $invoices = invoices::where('id','=',$id)->get();
        $webformdetails = webform::where('invoice_id','=',$id)->get(); 
        $dropshippingdetails = dropshipping_order::where('invoice_id','=',$id)->get();
        $addonsDetails = AdonsOrder::where('invoice_id','=',$id)->get();

        $featuredata = [];
        $includedata = [];
        $addonsdata = [];
        $addonsOrderData = [];
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
            

 
        }

        foreach($addonsDetails as $addonsDetail){

            $addonsOrderData = ["types" => json_decode($addonsDetail['type']), "descriptions" => json_decode($addonsDetail['description'])];
            
        }
        $includes = [];
        $features = [];
        $addons = [];
        if (isset($featuredata)){
            for ($i=0; $i < sizeof($featuredata); $i++) { 
                $features = additionalfeature::where('featurename','=',$featuredata[$i])->get();
            }
        }
        if (isset($includedata)){
            for ($i=0; $i < sizeof($includedata); $i++) { 
                $includes = includeonpage::where('includeonpages','=',$includedata[$i])->get();
            }
        }
        if (isset($addonsdata)){
            for ($i=0; $i < sizeof($addonsdata); $i++) { 
                $addons = addons::where('addonsname','=',$addonsdata[$i])->get();
            }
        }
        
        /* return $includes[0]->includeonpages; */

        
        // return $featuredata;
        //return $invoices;
        if(count($webformdetails)){
            return view('orderdetails',['addons'=>$addons,'includes'=>$includes,'features'=>$features,'dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'pagedataarray'=>$pagedataarray,'featuredata'=>$featuredata,'includedata'=>$includedata, 'addonsdata' => $addonsdata,'logoimage'=>$logoimage, "addonsOrderData" => $addonsOrderData]);

        }elseif(count($landingpagedetails)){
           // return $landingpagedetails;
            return view('orderdetails',['addons'=>$addons,'includes'=>$includes,'features'=>$features,'dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'pagedataarray'=>$pagedataarray,'featuredata'=>$featuredata,'includedata'=>$includedata, 'addonsdata' => $addonsdata,'logoimage'=>$logoimage, "addonsOrderData" => $addonsOrderData]);
        }
        if(count($dropshippingdetails)){
            // return $landingpagedetails;
             return view('orderdetails',['addons'=>$addons,'includes'=>$includes,'features'=>$features,'image'=>$image, 'dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'addonsdata'=>$addonsdata,'productCategory'=>$productCategory,'productType'=>$productType,'noOfProducts'=>$noOfProducts,'profitMargin'=>$profitMargin, "addonsOrderData" => $addonsOrderData]);
         }
         if(count($addonsOrderData)){
            // return $landingpagedetails;
             return view('orderdetails',['addons'=>$addons,'dropshippingdetails'=>$dropshippingdetails,'webformdetails'=>$webformdetails,'landingpagedetails'=>$landingpagedetails,'invoices'=>$invoices,'addonsdata'=>$addonsdata, "addonsOrderData" => $addonsOrderData]);
         }
            
       
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(orderdetails $orderdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderdetails $orderdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderdetails  $orderdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetails $orderdetails)
    {
        //
    }

    public function getAllOrderPromoCode(){
        
        $promos = Promo::latest()->get();

        return response()->json($promos);
    }
}
