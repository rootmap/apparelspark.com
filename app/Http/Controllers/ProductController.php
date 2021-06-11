<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catdata = Category::all();
        $subcatdata = SubCategory::all();
        return view('admin.pages.product',compact('catdata','subcatdata'));
    }

    public function productList(){
        $data = Product::all();
        return view('admin.pages.product-list',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subCatData(Request $request) {
        $query = DB::table('sub_categories')->where('category_id', $request->cat)->get();
		//dd($query);
        return response()->json($query);
    }

    public function getEXT($originalName='')
    {
        return pathinfo($originalName, PATHINFO_EXTENSION);
    }



    public function create(Request $request)
    {
        $this->validate($request,
            [
                'category_id'=>'required',
                'sub_category_id'=>'required',
                'name'=>'required',
                //'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        // dd($request->title);
        

        $catid = Category::find($request->category_id);
        $catname =  $catid->name;
        $subcatid = SubCategory::find($request->sub_category_id);
        $subcatname =  $subcatid->name;
        

        $specification_data=array();
        $additional_info_data =array();

        if(count($_POST['repeater-group'])>0){
            foreach($_POST['repeater-group'] as $row){
                if(isset($row['specification'])){
                    array_push($specification_data, $row['specification']);
                }

                if(isset($row['additional_info'])){
                    array_push($additional_info_data, $row['additional_info']);
                }
            }
        }

            $images_ar=array();
            $files = $request->allFiles();
            //dd($files['image']);
            if(count($files['image'])>0){

                

                $upload = 'upload/product';
                for ($i=0; $i <count($files['image']); $i++) { 
                    $ext=$files['image'][$i]->getClientOriginalExtension();
                    $product_image="product_".$i."_".time().".".$ext;

                    $file=$files['image'][$i]->getClientOriginalName();
                    $files['image'][$i]->move($upload,$product_image);
                    array_push($images_ar, $product_image);
                }
            }

            //dd($images_ar);

            $images=json_encode($images_ar);

        //dd($request->image);
         $specification=json_encode($specification_data);
         $additional_info=json_encode($additional_info_data);

         

        $SiteSetting=new Product();
        $SiteSetting->category_id=$request->category_id ;
        $SiteSetting->category_name=$catname ;
        $SiteSetting->sub_category_id=$request->sub_category_id ;
        $SiteSetting->sub_category_name=$subcatname ;
        $SiteSetting->name=$request->name ;
        $SiteSetting->price=$request->price ;
        $SiteSetting->short_detail=$request->short_detail ;
        $SiteSetting->specification=$specification ;
        $SiteSetting->image=$images;
        $SiteSetting->additional_info=$additional_info ;
        $SiteSetting->save();
        
        return back()->with('status','Product Saved Successfully.');
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id=0)
    {
        $edit=Product::find($id);
        $data=Product::all();
        $catdata = Category::all();
        $subcatdata = SubCategory::all();
        return view('admin.pages.product',compact('data','edit','catdata','subcatdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id=0)
    {
        $catid = Category::find($request->category_id);
        $catname =  $catid->name;
        $subcatid = SubCategory::find($request->sub_category_id);
        $subcatname =  $subcatid->name;
        

        $specification_data=array();
        $additional_info_data =array();

        if(count($_POST['repeater-group'])>0){
            foreach($_POST['repeater-group'] as $row){
                if(isset($row['specification'])){
                    array_push($specification_data, $row['specification']);
                }

                if(isset($row['additional_info'])){
                    array_push($additional_info_data, $row['additional_info']);
                }
            }
        }

            $images_ar=array();
            $files = $request->allFiles();
            if($request->file('image')>0)
            {
             //dd(2);
                if(count($files['image'])>0){
                    $upload = 'upload/product';
                    for ($i=0; $i <count($files['image']); $i++) {
                        $ext=$files['image'][$i]->getClientOriginalExtension();
                        $product_image="product_".$i."_".time().".".$ext;

                        $file=$files['image'][$i]->getClientOriginalName();
                        $files['image'][$i]->move($upload,$product_image);
                        array_push($images_ar, $product_image);
                    }
                }
                $images=json_encode($images_ar);
            }
            else
            {
                $images=($request->ex_image);
                //dd($images);
            }
            

            //dd($images_ar);

            

        //dd($request->image);
         $specification=json_encode($specification_data);
         $additional_info=json_encode($additional_info_data);

         

        $SiteSetting=Product::findOrFail($id);
        $SiteSetting->category_id=$request->category_id ;
        $SiteSetting->category_name=$catname ;
        $SiteSetting->sub_category_id=$request->sub_category_id ;
        $SiteSetting->sub_category_name=$subcatname ;
        $SiteSetting->name=$request->name ;
        $SiteSetting->price=$request->price ;
        $SiteSetting->short_detail=$request->short_detail ;
        $SiteSetting->specification=$specification ;
        $SiteSetting->image=$images;
        $SiteSetting->additional_info=$additional_info ;
        $SiteSetting->save();
        
        return back()->with('status','Product Saved Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id=0)
    {
        $del = Product::find($id);
        $del->delete();
        return back()->with('status','Product Deleted Successfully.');
    }
}
