<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkSetting=SiteSetting::where('id',1)->count();
        if($checkSetting==1)
        {
            $editSetting=SiteSetting::where('id',1)->first();
            return view('admin.pages.site_setting',compact('editSetting'));
        }
        else
        {
            return view('admin.pages.site_setting');
        }
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
                'logo'=>'required',
                'phone_number'=>'required',
                'email'=>'required',
            ]
        );

        $site_logo = "";
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            $upload = 'upload/site_logo/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }

        $SiteSetting=new SiteSetting();
        $SiteSetting->name=$request->name;
        $SiteSetting->logo=$site_logo;
        $SiteSetting->phone_number=$request->phone_number;
        $SiteSetting->email=$request->email;
        $SiteSetting->address=$request->address;
        $SiteSetting->facebook=$request->facebook;
        $SiteSetting->twitter=$request->twitter;
        $SiteSetting->youtube=$request->youtube;
        $SiteSetting->google_plus=$request->google_plus;
        $SiteSetting->save();
        
        return back()->with('status','Site Settings Saved Successfully.');
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
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $siteSetting)
    {
        $editSetting=SiteSetting::find(1);
        return view('admin.pages.site_setting',compact('editSetting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $siteSetting, $id=0)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'phone_number'=>'required',
                'email'=>'required',
            ]
        );

        $site_logo = $request->ex_logo;
        if (!empty($request->file('logo'))) {
            $img = $request->file('logo');
            $upload = 'upload/site_logo/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
            @unlink($upload . '/' . $request->ex_logo);
        }

        $SiteSetting=SiteSetting::find($id);
        $SiteSetting->name=$request->name;
        $SiteSetting->logo=$site_logo;
        $SiteSetting->phone_number=$request->phone_number;
        $SiteSetting->email=$request->email;
        $SiteSetting->address=$request->address;
        $SiteSetting->facebook=$request->facebook;
        $SiteSetting->twitter=$request->twitter;
        $SiteSetting->youtube=$request->youtube;
        $SiteSetting->google_plus=$request->google_plus;
        $SiteSetting->save();
        
        return back()->with('status','Site Settings Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }
}
