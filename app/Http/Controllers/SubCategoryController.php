<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catdata = Category::all();
        $data = SubCategory::all();
        return view('admin.pages.sub_category',compact('catdata','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,
            [
                'category_id'=>'required',
                'name'=>'required',
                'image'=>'required',
            ]
        );
        // dd($request->title);
        $site_logo = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/SubCategory/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }
        $catid = Category::find($request->category_id);
        $catname =  $catid->name;
        //dd($catname);
        $SiteSetting=new SubCategory();
        $SiteSetting->category_id=$request->category_id ;
        $SiteSetting->category_name=$catname ;
        $SiteSetting->name=$request->name ;
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','SubCategory Saved Successfully.');
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
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory,$id=0)
    {
        $edit=SubCategory::find($id);
		//dd($edit->category_id);
        $data=SubCategory::all();
         $catdata = Category::all();
        return view('admin.pages.sub_category',compact('data','edit','catdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory,$id=0)
    {
        $this->validate($request,
            [
                'name'=>'required',
            ]
        );

        $site_logo = $request->ex_image;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/SubCategory/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
            @unlink($upload . '/' . $request->ex_image);
        }

        $catid = Category::find($request->category_id);
		//dd($catid);
        $catname =  $catid->name;

        $SiteSetting=SubCategory::find($id);
        $SiteSetting->category_id=$request->category_id ;
        $SiteSetting->category_name=$catname ;
        $SiteSetting->name=$request->name ;
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','SubCategory Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory,$id=0)
    {
        $del = SubCategory::find($id);
        $del->delete();
        return back()->with('status','SubCategory Deleted Successfully.');
    }
}
