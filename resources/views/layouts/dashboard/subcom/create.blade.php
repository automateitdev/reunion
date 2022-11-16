@extends('home')
  
@section('content')
<style>
    .row{
        /* text-align: center; */
    }
    .mb-25{
    line-height: 36px;
    font-size: 24px;
    color: #444 !important;
    font-weight: 600;
    margin-top: 11px;
    }
    .mb-25 a{
        color: #19686d;
    }
</style>
<div class="row">
        <div class="col">
            <h2 class="mb-25">
                <a href="#">Sub Committee Information</a> / <a href="{{ route('sub-committe.index') }}">Back</a>
            </h2>
        </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form style="margin: auto; width: 520px;" action="{{ route('sub-committe.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row1">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <label for="" class="form-label">উপকমিটি নির্বাচন করুন</label>
                <select name="" class="form-control" id="">
                    <option value="">একটি নির্বাচন করুন</option>
                    @foreach($subcomlists as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <label class="form-label">নাম</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">পদবী</label>
                <input type="text" name="designation" class="form-control" placeholder="Designation">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">মোবাইল নাম্বার</label>
                <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">ইমেইল</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label">ছবি</label>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">যুক্ত করুন</button>
        </div>
    </div>
     
</form>
@endsection