<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\About;
use App\Models\Gallery;

class BasicController extends Controller
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
        return view('layouts.dashboard.basic.index', compact('logos','sliders','abouts','galleries'));
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
    public function logostore(Request $request)
    {
        $this->validate($request,[
            'school_logo' => 'required',
            'sg_logo' => 'required'
        ]);

        $input = new Logo();
        if($request->hasFile('school_logo')){
            $file = $request->file('school_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/logo_one/',$filename);
            $input->school_logo = $filename;
        }else{
            $input->school_logo = '';
        }
        if($request->hasFile('sg_logo')){
            $file = $request->file('sg_logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/logo_two/',$filename);
            $input->sg_logo = $filename;
        }else{
            $input->sg_logo = '';
        }

        $input->save();
        return redirect(route('basic-info.index'));
    }

    public function sliderstore(Request $request)
    {
        $this->validate($request,[
            'slider_img' => 'required',
        ]);

        $input = new Slider();
        if($request->hasFile('slider_img')){
            $file = $request->file('slider_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/slider/',$filename);
            $input->slider_img = $filename;
        }else{
            $input->slider_img = '';
        }

        $input->save();
        return redirect(route('basic-info.index'));
    }
    public function aboutstore(Request $request)
    {
        $this->validate($request,[
            'content_one' => 'required',
            'content_two' => 'nullable',
            'abimg' => 'required',
        ]);

        $input = new About();
        $input->content_one = $request->content_one;
        $input->content_two = $request->content_two;
        if($request->hasFile('abimg')){
            $file = $request->file('abimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/about/',$filename);
            $input->abimg = $filename;
        }else{
            $input->abimg = '';
        }

        $input->save();
        return redirect(route('basic-info.index'));
    }

    // gallery
    public function gallerystore(Request $request)
    {
        $this->validate($request,[
            'abimg' => 'required',
        ]);

        $input = new Gallery();
        if($request->hasFile('abimg')){
            $file = $request->file('abimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/gallery/',$filename);
            $input->abimg = $filename;
        }else{
            $input->abimg = '';
        }

        $input->save();
        return redirect(route('basic-info.index'));
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
    public function logodestroy($id)
    {
        Logo::find($id)->delete();
        return redirect()->back();
    }
    public function sliderdestroy($id)
    {
        Slider::find($id)->delete();
        return redirect()->back();
    }
    public function aboutdestroy($id)
    {
        About::find($id)->delete();
        return redirect()->back();
    }
    public function gallerydestroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->back();
    }
}
