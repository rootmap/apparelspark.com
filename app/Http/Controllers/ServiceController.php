<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.pages.service',compact('data'));
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
                'class_name'=>'required',
                'detail'=>'required',
            ]
        );


        $SiteSetting=new Service();
        $SiteSetting->name=$request->name;
        $SiteSetting->class_name=$request->class_name;
        $SiteSetting->detail=$request->detail;
        $SiteSetting->save();
        
        return back()->with('status','Service Saved Successfully.');
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service,$id=0)
    {
        $edit=Service::find($id);
        $data=Service::all();
        return view('admin.pages.service',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service,$id=0)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'class_name'=>'required',
                'detail'=>'required',
            ]
        );


        $SiteSetting=Service::find($id);
        $SiteSetting->name=$request->name;
        $SiteSetting->class_name=$request->class_name;
        $SiteSetting->detail=$request->detail;
        $SiteSetting->save();
        
        return back()->with('status','Service Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service,$id=0)
    {
        $del = Service::find($id);
        $del->delete();
        return back()->with('status','Service Deleted Successfully.');
    }
}
