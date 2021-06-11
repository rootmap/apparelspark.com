<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.pages.slider',compact('data'));
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
                'title_two'=>'required',
                'image'=>'required',
            ]
        );
        // dd($request->title);
        $site_logo = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/slider/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }

        $SiteSetting=new Slider();
        $SiteSetting->title_one=$request->title_one ? $request->title_one : ' ';
        $SiteSetting->title_two=$request->title_two;
        $SiteSetting->title_three=$request->title_three ? $request->title_three : ' ';
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Slider Saved Successfully.');
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
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider, $id=0)
    {
        $edit=Slider::find($id);
        $data=Slider::all();
        return view('admin.pages.slider',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider,$id=0)
    {
        $this->validate($request,
            [
                'title_two'=>'required',
            ]
        );

        $site_logo = $request->ex_image;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/slider/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
            @unlink($upload . '/' . $request->ex_image);
        }

        $SiteSetting=Slider::find($id);
        $SiteSetting->title_one=$request->title_one ? $request->title_one : ' ';
        $SiteSetting->title_two=$request->title_two;
        $SiteSetting->title_three=$request->title_three ? $request->title_three : ' ';
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Slider Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider,$id=0)
    {
        $del = Slider::find($id);
        $del->delete();
        return back()->with('status','Slider Deleted Successfully.');
    }
}
