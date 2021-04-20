<?php

namespace App\Http\Controllers;

use App\Models\pagetype;
use App\Models\Promo;
use App\Models\addons;
use App\Models\includeonpage;
use App\Models\additionalfeature;
use Illuminate\Http\Request;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class PagetypeController extends Controller
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
    public function storepagetype(Request $request)
    {
        //to store all the pages types, features.
        //return $request;
        request()->validate([
            'pagetypes'=> 'required',
            'price' => 'required'
        ]);

        $pagetypes = new pagetype();
        $pagetypes->pagetypes = request('pagetypes');
        $pagetypes->description = request('description');
        $pagetypes->price = request('price');

        $pagetypes->save();
        $promocode = Promo::all();
        $addons = addons::all();
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
     * @param  \App\Models\pagetype  $pagetype
     * @return \Illuminate\Http\Response
     */
    public function show(pagetype $pagetype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pagetype  $pagetype
     * @return \Illuminate\Http\Response
     */
    public function edit(pagetype $pagetype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pagetype  $pagetype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pagetype $pagetype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pagetype  $pagetype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            DB::delete ('delete from includeonpages where id = ?',[$id]);
            return redirect('/admin/pages');
           
        } catch(\Exception $e) {
            echo "Record not Deleted.";
        }
    }
}
