<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCommittee;
use App\Models\Subcommetteelist;

class SubCommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCommittee = SubCommittee::all();
        return view('layouts.dashboard.subcom.index', compact('subCommittee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcomlists = Subcommetteelist::all();
        return view('layouts.dashboard.subcom.create', compact('subcomlists'));
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
            'subcom_id' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input= $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/sub_com';
            $profileImage = date('YmdHis') . ".". $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        SubCommittee::create($input);

        return redirect()->route('sub-committe.index');
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
        $subCommittee = SubCommittee::find($id);
        return view('layouts.dashboard.subcom.edit',compact('subCommittee'));
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
        $subCommittee = SubCommittee::find($id);

        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/sub_com';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $subCommittee->update($input);

        return redirect()->route('sub-committe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCommittee::find($id)->delete();
        return redirect()->back();
    }
}
