<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchCommittee;
use App\Models\Branchlist;

class BranchCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchCommittee = BranchCommittee::all();
        return view('layouts.dashboard.branch.index', compact('branchCommittee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchlists = Branchlist::all();
        return view('layouts.dashboard.branch.create', compact('branchlists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'branch_id' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input= $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/branch';
            $profileImage = date('YmdHis') . ".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        BranchCommittee::create($input);

        return redirect()->route('branch-committe.index');
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
        $branchCommittee = BranchCommittee::find($id);
        return view('layouts.dashboard.branch.edit',compact('branchCommittee'));
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
        $request->validate([
            'name' => 'nullable',
            'designation' => 'nullable',
            'mobile_no' => 'nullable',
            'email' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
        $branchCommittee = BranchCommittee::find($id);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/branch';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $branchCommittee ->update($input);

        return redirect()->route('branch-committe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BranchCommittee::find($id)->delete();
        return redirect()->back();
    }
}
