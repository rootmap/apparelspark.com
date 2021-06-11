<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();
        return view('admin.pages.client',compact('data'));
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
                'image'=>'required',
            ]
        );
        // dd($request->title);
        $site_logo = "";
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/Client/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
        }

        //dd($catname);
        $SiteSetting=new Client();
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Client Saved Successfully.');
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client,$id=0)
    {
        $edit=Client::find($id);
        $data=Client::all();
        return view('admin.pages.client',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client,$id=0)
    {
        $site_logo = $request->ex_image;
        if (!empty($request->file('image'))) {
            $img = $request->file('image');
            $upload = 'upload/Client/';
            $site_logo = time() . "." . $img->getClientOriginalExtension();
            $img->move($upload, $site_logo);
            @unlink($upload . '/' . $request->ex_image);
        }

        $SiteSetting=Client::find($id);
        $SiteSetting->image=$site_logo;
        $SiteSetting->save();
        
        return back()->with('status','Client Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client,$id=0)
    {
        $del = Client::find($id);
        $del->delete();
        return back()->with('status','Client Deleted Successfully.');
    }
}
