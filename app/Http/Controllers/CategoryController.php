<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.pages.category',compact('data'));
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
                'name'=>'required',
                'image'=>'required',
            ]
        );
        // dd($request->title);
        $site_logo = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/category/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }

        $SiteSetting=new Category();
        $SiteSetting->name=$request->name ;
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Category Saved Successfully.');
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id=0)
    {
        $edit=Category::find($id);
        $data=Category::all();
        return view('admin.pages.category',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id=0)
    {
        $this->validate($request,
            [
                'name'=>'required',
            ]
        );

        $site_logo = $request->ex_image;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/category/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
            @unlink($upload . '/' . $request->ex_image);
        }

        $SiteSetting=Category::find($id);
        $SiteSetting->name=$request->name ;
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Category Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id=0)
    {
        $del = Category::find($id);
        $del->delete();
        return back()->with('status','Category Deleted Successfully.');
    }
}
