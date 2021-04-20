<?php

namespace App\Http\Controllers;

use App\Models\addons;
use App\Models\Promo;
use App\Models\pagetype;
use App\Models\includeonpage;
use App\Models\additionalfeature;
use Illuminate\Http\Request;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class AddonsController extends Controller
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
    public function storeaddons(Request $request)
    {
        //to store all the pages types, features.
        //return $request;
        request()->validate([
            'addons'=> 'required',
            'price' => 'required'
        ]);

        $addons = new addons();
        $addons->addonsname = request('addons');
        $addons->price = request('price');
        $addons->description = request('description');

        if($request->image){
            $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save( public_path('images\\' . $filename ));
                $addons->image = $filename;

        }

        $addons->save();
        $promocode = Promo::all();
        $addons = addons::all();
        $pagetypes = pagetype::all();
        $includes = includeonpage::all();
        $features = additionalfeature::all();

        return view('admin.showfeatures',['features'=>$features,'includes'=>$includes,'pagetypes'=>$pagetypes,'addons'=>$addons,'promocode'=>$promocode]);


    }
    public function storepromocode(Request $request)
    {
        //to store all the pages types, features.
        //return $request;
        request()->validate([
            'code'=> 'required',
            'discount' => 'required'
        ]);

        $promocode = new Promo();
        $promocode->code = request('code');
        $promocode->discount = request('discount');
        $promocode->save();

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
     * @param  \App\Models\addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function show(addons $addons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function edit(addons $addons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addons $addons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function destroypromocode($id)
    {
        //
        try{
            DB::delete ('delete from promos where id = ?',[$id]);
            return redirect('/admin/pages');
           
        } catch(\Exception $e) {
            echo "Record not Deleted.";
        }
    }
    public function destroy($id)
    {
        //
        try{
            DB::delete ('delete from addons where id = ?',[$id]);
            return redirect('/admin/pages');
           
        } catch(\Exception $e) {
            echo "Record not Deleted.";
        }
    }
}
