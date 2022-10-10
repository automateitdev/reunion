@extends('layouts.app')

@section('content')
<div class="container log">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <h3>Application Info</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">এস এস সি ব্যাচ/ভর্তির বছর</label>
                                    <select class="form-control" aria-label="Defaul" name="year">
                                        <option selected>Select Batch</option>
                                        @foreach($batches as $b)
                                        <option value="{{$b->id}}">{{$b->batch_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">বিভাগ নাম</label>
                                    <select class="form-control" aria-label="Defaul" name="category_id">
                                        <option selected>Select Category</option>
                                        @foreach($categories as $item)
                                        <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">নাম</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="f_name" class="form-label">পিতা/স্বামীর নাম</label>
                                    <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ old('f_name') }}" required autocomplete="Father Name" autofocus>

                                    @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">ইমেল</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">মোবাইল নাম্বর</label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">ফেসবুক লিংক</label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">বাড়ির ঠিকানা</label>
                                    <input id="address" type="text" class="form-control" name="address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="mailing_address" class="form-label">থানা/উপজেলা</label>
                                    <input id="mailing_address" type="text" class="form-control" name="mailing_address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">জেলা</label>
                                    <select class="form-control" aria-label="Defaul" name="year">
                                        <option selected>Select District</option>
                                        @foreach($districts as $item)
                                        <option value="{{$item->id}}">{{$item->district_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">বিভাগ</label>
                                    <select class="form-control" aria-label="Defaul" name="category_id">
                                        <option selected>Select Division</option>
                                        @foreach($divisions as $item)
                                        <option value="{{$item->id}}">{{$item->division_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="year" class="form-label">ব্লাড গ্রুপ</label>
                                    <select class="form-control" aria-label="Defaul" name="year">
                                        <option selected>Select Blood Group</option>
                                        @foreach($bloods as $item)
                                        <option value="{{$item->id}}">{{$item->blood}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">ড্রেজ সাইজ (টিশার্ট)</label>

                                    <select class="form-control" aria-label="Defaul" name="category_id">
                                        <option selected>Tshirt Size</option>
                                        @foreach($thsirts as $item)
                                        <option value="{{$item->id}}">{{$item->size}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="img" class="form-label">ছবি</label>
                                    <input id="img" type="file" class="form-control" name="img" required>
                                </div>
                            </div>
                        </div>
                        <h3>Applicant Position</h3>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="organization" class="form-label">প্রতিষ্টান</label>
                                    <input id="organization" type="text" class="form-control" name="organization" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">পদবী</label>
                                    <input id="designation" type="text" class="form-control" name="designation" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mailing_address" class="form-label">প্রতিষ্টানের ঠিকানা</label>
                                    <input id="mailing_address" type="text" class="form-control @error('mailing_address') is-invalid @enderror" name="mailing_address" value="{{ old('mailing_address') }}" required autocomplete="mailing_address" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">অতিথি</label>
                                    <select class="form-control" id="mySelectBox" aria-label="Defaul" name="year">
                                        <option selected>Open this select menu</option>
                                        <option value="1" selected="selected">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered" id="register_table">
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">অতিথির নাম</th>
                                            <th scope="col">সম্পর্ক</th>
                                            <th scope="col">ড্রেজ সাইজ (টিশার্ট)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="re_table">
                                        <tr class="add">
                                            <!-- <th scope="row"><input type="text" class="serial"></th> -->
                                            <td><input type="text" class="form-control relative" name="relative"></td>
                                            <td><input type="text" class="form-control relation" name="relation"></td>
                                            <td>
                                                <select class="form-control r_tshirt" aria-label="Defaul" name="tshirt_id">
                                                <option selected>Tshirt Size</option>
                                                @foreach($thsirts as $item)
                                                <option value="{{$item->id}}">{{$item->size}}</option>
                                                @endforeach
                                                </select>
                                            </td>
                                            <td><a href="javascript:void(0)" class="addNewline btn btn-success">+ যুক্ত করুন</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div> -->
                        

                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .log{
        padding-top: 30px;
        padding-bottom: 30px;
    }
</style>
@endsection