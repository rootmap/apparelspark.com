<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkSetting=Payment::where('id',1)->count();
        if($checkSetting==1)
        {
            $edit=Payment::where('id',1)->first();
            return view('admin.pages.payment',compact('edit'));
        }
        else
        {
            return view('admin.pages.payment');
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
                'detail'=>'required',
            ]
        );
        

        $SiteSetting=new Payment();
        $SiteSetting->detail=$request->detail ;
        $SiteSetting->save();
        
        return back()->with('status','Payment Saved Successfully.');
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
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment,$id=0)
    {
        $edit=Payment::find($id);
        $data=Payment::all();
        return view('admin.pages.payment',compact('data','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment,$id=0)
    {
        $this->validate($request,
            [
                'detail'=>'required',
            ]
        );

        $SiteSetting=Payment::find($id);
        $SiteSetting->detail=$request->detail ;
        $SiteSetting->save();
        
        return back()->with('status','Payment Modified Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment,$id=0)
    {
        $del = Payment::find($id);
        $del->delete();
        return back()->with('status','Payment Deleted Successfully.');
    }
}
