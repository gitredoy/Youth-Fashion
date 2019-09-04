<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function addBrand(){
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request){
        $this->validate($request,[
           'brand_name'=> 'required',
           'brand_description'=>'required',
           'publication_status'=>'required'
        ]);
        $brand = new Brand();
        $brand -> brand_name = $request -> brand_name;
        $brand -> brand_description = $request ->brand_description;
        $brand -> publication_status = $request -> publication_status;
        $brand -> save();

        return redirect('/brand/add')->with('message','New Brand Added Successfully');

    }

    public function manageBrand(){

        $brand = Brand::all();

        return view('admin.brand.manage-brand',[
            'brand' => $brand
        ]);
    }


    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand -> publication_status=0;
        $brand ->save();
        return redirect('/brand/manage')->with('message','Brand UnPublished Successfully');
    }

    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand -> publication_status=1;
        $brand -> save();
        return redirect('/brand/manage')->with('message','Brand Published Successfully');
    }

    public function editBrand($id){
        $brand = Brand::find( $id);
        
        return view('admin.brand.edit-brand',[
            'brand' => $brand
        ]);
    }

    public function updateBrand(Request $request){
        $brand = Brand::find($request->id);
        $brand -> brand_name = $request -> brand_name;
        $brand -> brand_description = $request -> brand_description;
        $brand -> publication_status = $request-> publication_status;
        $brand -> save();

        return redirect('/brand/manage')->with('message','Brand Updated Successfully');
    }

    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand -> delete();
        return redirect('/brand/manage')->with('message','Brand Deleted Successfully');
    }
























    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
