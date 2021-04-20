<?php

namespace App\Http\Controllers;
use App\Models\addons;
use App\Models\Promo;

use App\Models\pagetype;
use App\Models\includeonpage;
use App\Models\additionalfeature;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class IncludeonpageController extends Controller
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
public function storeinclude(Request $request)
    {
        //to store all the pages types, features.
        //return $request;
        request()->validate([
            'includeonpages'=> 'required',
            'price' => 'required'
        ]);

        $includes = new includeonpage();
        $includes->description = request('includesDescription');
        $includes->includeonpages = request('includeonpages');
        $includes->price = request('price');
        if($request->image){
            $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 300)->save( public_path('images\\' . $filename ));
                $includes->image = $filename;

        }

        $includes->save();
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
     * @param  \App\Models\includeonpage  $includeonpage
     * @return \Illuminate\Http\Response
     */
    public function show(includeonpage $includeonpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\includeonpage  $includeonpage
     * @return \Illuminate\Http\Response
     */
    public function edit(includeonpage $includeonpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\includeonpage  $includeonpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, includeonpage $includeonpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\includeonpage  $includeonpage
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
