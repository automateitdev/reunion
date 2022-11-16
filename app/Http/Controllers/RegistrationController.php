<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Blood;
use App\Models\Tshirt;
use App\Models\DressCategory;
use App\Models\Participent;
use App\Models\Confirmation;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;
use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::all();
        $categories = Category::all();
        $districts = District::all();
        $divisions = Division::all();
        $bloods = Blood::all();
        $thsirts = Tshirt::all();
        $dresscategories = DressCategory::all();
        return view('auth.register', compact('batches','categories','districts','divisions','bloods','thsirts','dresscategories'));
    }

    public function registerCategory(Request $request)
    {
        $data = Category::select('price')->where('id',$request->id)->first();
    	return response()->json($data);
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
        
        $this->validate($request,[
            'add_id' => 'nullable',
            'batch_id' => 'nullable',
            'cat_id' => 'required',
            'pay' => 'required',
            'name' => 'required',
            'g_name' => 'required',
            'email' => 'nullable',
            'mobile' => 'required',
            'fb_link' => 'nullable',
            'address' => 'required',
            'thana' => 'required',
            'district_id' => 'required',
            'division_id' => 'nullable',
            'blood_id' => 'nullable',
            'dress_cat_id' => 'nullable',
            'size_id' => 'nullable',
            'photo' => 'required',
            'organization' => 'nullable',
            'designation' => 'nullable',
            'org_address' => 'nullable',
            'status' => 'required',
        ]);
        $input = new Participent();
        
        $input->add_id = $request->add_id;
        $input->batch_id = $request->batch_id;
        $input->cat_id = $request->cat_id;
        $input->pay = $request->pay;
        $input->name = $request->name;
        $input->g_name = $request->g_name;
        $input->email = $request->email;
        $input->mobile = $request->mobile;
        $input->fb_link = $request->fb_link;
        $input->address = $request->address;
        $input->thana = $request->thana;
        $input->district_id = $request->district_id;
        $input->division_id = $request->division_id;
        $input->blood_id = $request->blood_id;
        $input->dress_cat_id = $request->dress_cat_id;
        $input->size_id = $request->size_id;
        $input->organization = $request->organization;
        $input->designation = $request->designation;
        $input->org_address = $request->org_address;
        $input->reference = "null";
        $input->status = "Pending";

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/participent/',$filename);
            $input->photo = $filename;
        }else{
            $input->photo = '';
        }
            
        $info = array( 
            'currency' => "BDT",
            'amount' => $request->pay, 
            'order_id' => $request->mobile, 
            'discsount_amount' =>0 , 
            'disc_percent' =>0 , 
            'client_ip' => "127.0.0.1", 
            'customer_name' => $request->name, 
            'customer_phone' => $request->mobile, 
            'email' => $request->email, 
            'customer_address' => $request->address, 
            'customer_city' => $request->thana, 
            'customer_state' => $request->district_id, 
            'customer_postcode' => "null", 
            'customer_country' => "BD",
            'status' => "Pending",
            );
            
        $shurjopay_service = new ShurjopayController();
        return $shurjopay_service->checkout($info,$input->save());
    }
    

    public function verifyPayment(Request $request)
    {
        $order_id = $request->order_id;
        $shurjopay_service = new ShurjopayController();

        $data = $shurjopay_service->verify($order_id);
        $list=json_decode($data,true);
        
        // echo $list[0]['order_id'];
        // echo "<pre>";
        // print_r($list);
        // echo "</pre>";
        
        $input = new Confirmation();
        $input->order_id = $list[0]['order_id'];
        $input->amount = $list[0]['amount'];
        $input->mobile = $list[0]['customer_order_id'];
        $input->msg = $list[0]['sp_massage'];
        $input->name = $list[0]['name'];
        $input->transaction_status = $list[0]['transaction_status'];
        $input->save();
        $participents = Participent::all();
        return view('payment', compact('participents'));
    }

    public function manualReg(Request $request)
    {
        $batches = Batch::all();
        $categories = Category::all();
        $districts = District::all();
        $divisions = Division::all();
        $bloods = Blood::all();
        $thsirts = Tshirt::all();
        $dresscategories = DressCategory::all();
        return view('layouts.dashboard.manual.create', compact('batches','categories','districts','divisions','bloods','thsirts','dresscategories'));
    }
    public function manualRegStore(Request $request)
    {
        $this->validate($request,[
            'add_id' => 'nullable',
            'batch_id' => 'nullable',
            'cat_id' => 'required',
            'pay' => 'required',
            'name' => 'required',
            'g_name' => 'required',
            'email' => 'nullable',
            'mobile' => 'required',
            'fb_link' => 'nullable',
            'address' => 'required',
            'thana' => 'required',
            'district_id' => 'required',
            'division_id' => 'nullable',
            'blood_id' => 'nullable',
            'dress_cat_id' => 'nullable',
            'size_id' => 'nullable',
            'photo' => 'required',
            'organization' => 'nullable',
            'designation' => 'nullable',
            'org_address' => 'nullable',
            'status' => 'required',
            'reference'=> 'nullable'
        ]);
        $input = new Participent();
        
        $input->add_id = $request->add_id;
        $input->batch_id = $request->batch_id;
        $input->cat_id = $request->cat_id;
        $input->pay = $request->pay;
        $input->name = $request->name;
        $input->g_name = $request->g_name;
        $input->email = $request->email;
        $input->mobile = $request->mobile;
        $input->fb_link = $request->fb_link;
        $input->address = $request->address;
        $input->thana = $request->thana;
        $input->district_id = $request->district_id;
        $input->division_id = $request->division_id;
        $input->blood_id = $request->blood_id;
        $input->dress_cat_id = $request->dress_cat_id;
        $input->size_id = $request->size_id;
        $input->organization = $request->organization;
        $input->designation = $request->designation;
        $input->org_address = $request->org_address;
        $input->reference = $request->reference;
        $input->status = "Success";

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/participent/',$filename);
            $input->photo = $filename;
        }else{
            $input->photo = '';
        }
        $input->save();
        return redirect()->route('manualReg')->with('message', 'Data Upload Successfully');
    }
    // Bbhs$1234
    // cadmin_bbhs
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
    public function verifyPaymentfail()
    {
        return view('cancel');
    }
}
