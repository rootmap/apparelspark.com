<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return view('admin.pages.team',compact('data'));
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
            $upload = 'upload/team/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }

        $SiteSetting=new Team();
        $SiteSetting->name=$request->name;
        $SiteSetting->image=$site_logo;
        $SiteSetting->detail=$request->detail ? $request->detail : ' ';
        $SiteSetting->facebook=$request->facebook;
        $SiteSetting->twitter=$request->twitter;
        $SiteSetting->youtube=$request->youtube;
        $SiteSetting->google_plus=$request->google_plus;
        $SiteSetting->save();
        
        return back()->with('status','Team Saved Successfully.');
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team,$id=0)
    {
        $edit=Team::find($id);
        $data=Team::all();
        return view('admin.pages.team',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team,$id=0)
    {
        $this->validate($request,
            [
                'name'=>'required',
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

        $SiteSetting=Team::find($id);
        $SiteSetting->name=$request->name;
        $SiteSetting->image=$site_logo;
        $SiteSetting->detail=$request->detail ? $request->detail : ' ';
        $SiteSetting->facebook=$request->facebook;
        $SiteSetting->twitter=$request->twitter;
        $SiteSetting->youtube=$request->youtube;
        $SiteSetting->google_plus=$request->google_plus;
        $SiteSetting->save();
        
        return back()->with('status','Team Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team,$id=0)
    {
        $del = Team::find($id);
        $del->delete();
        return back()->with('status','Team Deleted Successfully.');
    }
}
