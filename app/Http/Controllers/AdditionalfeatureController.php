<?php

namespace App\Http\Controllers;
use App\Models\addons;

use App\Models\pagetype;
use App\Models\includeonpage;
use App\Models\additionalfeature;
use App\Http\Controllers\IncludeonpageController;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use DB;
use App\Models\Promo;

class AdditionalfeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function storefeature(Request $request)
    {
        //to store all the pages types, features.
        //return $request;
        request()->validate([
            'featurename'=> 'required',
            'price' => 'required'
        ]);

        $feature = new additionalfeature();
        $feature->featurename = request('featurename');
        $feature->description = request('description');
        $feature->price = request('price');
        
        if($request->image){
            $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save( public_path('images\\' . $filename ));
                $feature->image = $filename;

        }

        $feature->save();
        $promocode = Promo::all();

        $addons = addons::all();
        $pagetypes = pagetype::all();
        $includes = includeonpage::all();
        $features = additionalfeature::all();

        return view('admin.showfeatures',['features'=>$features,'includes'=>$includes,'pagetypes'=>$pagetypes,'addons'=>$addons,'promocode'=>$promocode]);



    }
    public function showfeatures()
    {
        //to show all the pages types, features.
        $addons = addons::all();
        $promocode = Promo::all();

        $pagetypes = pagetype::all();
        $includes = includeonpage::all();
        $features = additionalfeature::all();

        return view('admin.showfeatures',['features'=>$features,'includes'=>$includes,'pagetypes'=>$pagetypes,'addons'=>$addons,'promocode'=>$promocode]);


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
     * @param  \App\Models\additionalfeature  $additionalfeature
     * @return \Illuminate\Http\Response
     */
    public function show(additionalfeature $additionalfeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\additionalfeature  $additionalfeature
     * @return \Illuminate\Http\Response
     */
    public function edit(additionalfeature $additionalfeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\additionalfeature  $additionalfeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, additionalfeature $additionalfeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\additionalfeature  $additionalfeature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            DB::delete ('delete from additionalfeatures where id = ?',[$id]);
            return redirect('/admin/pages');
           
        } catch(\Exception $e) {
            echo "Record not Deleted.";
        }
    }
}
