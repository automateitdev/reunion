<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\About;
use App\Models\SponsorInfo;
use App\Models\ManagementInfo;
use App\Models\SubCommittee;
use App\Models\BranchCommittee;
use App\Models\Gallery;
use App\Models\Branchlist;
use App\Models\Subcommetteelist;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        $sliders = Slider::all();
        $abouts = About::all();
        $galleries = Gallery::all();
        $sponsorinfos = SponsorInfo::all();
        $branchlists = Branchlist::all();
        $subcomlists = Subcommetteelist::all();
        return view('welcome', compact('logos','sliders','abouts','sponsorinfos', 'galleries', 'branchlists', 'subcomlists'));
    }

    public function maincommiteeview()
    {
        $logos = Logo::all();
        $managementInfo = ManagementInfo::all();
        $branchlists = Branchlist::all();
        $subcomlists = Subcommetteelist::all();
        return view('layouts.committee.maincom', compact('logos','managementInfo', 'branchlists', 'subcomlists'));
    }


    public function branchcommiteeview(Request $request)
    {
        $logos = Logo::all();
        $branchlists = Branchlist::all();
        $subcomlists = Subcommetteelist::all();
        $branchCommittee = BranchCommittee::where('branch_id', $request->id)->get();
        return view('layouts.committee.branch', compact('logos','branchCommittee','branchlists', 'subcomlists'));
    }
    
    public function subcommiteeview(Request $request)
    {
        $logos = Logo::all();
        $subCommittee = SubCommittee::where('subcom_id', $request->id)->get();
        $branchlists = Branchlist::all();
        $subcomlists = Subcommetteelist::all();
        return view('layouts.committee.subCom', compact('logos','subCommittee', 'branchlists', 'subcomlists'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
