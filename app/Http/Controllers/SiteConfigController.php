<?php

namespace App\Http\Controllers;

use App\Models\SiteConfig;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteConfig=new SiteConfig;
        $siteConfig=$siteConfig->get();
        return view('admin.siteconfig.index',compact('siteConfig'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siteconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'sitekey'=>'required|string',
            'sitevalue'=>'required|string',
        ]);
        $siteConfig=new SiteConfig;
        $siteConfig->sitekey=$request->sitekey;
        $siteConfig->sitevalue=$request->sitevalue;
        $siteConfig->save();
        return redirect()->route('siteconfig.index')->with('success','Site Config Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function show(SiteConfig $siteConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function edit($siteConfig)
    {
        $siteconfig=SiteConfig::find($siteConfig);
        return view('admin.siteconfig.edit',compact('siteconfig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$siteConfig)
    {
        $oldSiteConfig=SiteConfig::find($siteConfig);
        $this->validate($request,[
            'sitekey'=>'required|string',
            'sitevalue'=>'required|string',
        ]);
        $oldSiteConfig->sitekey=$request->sitekey;
        $oldSiteConfig->sitevalue=$request->sitevalue;
        $oldSiteConfig->save();
        return redirect()->route('siteconfig.index')->with('message','Site Config Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteConfig  $siteConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy($siteConfig)
    {
        $siteConfig=SiteConfig::find($siteConfig);
        $siteConfig->delete();
        return redirect()->route('siteconfig.index')->with('success','Site Config Deleted Successfully');
    }
}
