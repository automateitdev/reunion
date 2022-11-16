@extends('home')

@section('content')
<div id="registration">
    <div class="container log">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
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
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('manualRegStore') }}" enctype="multipart/form-data">
                            @csrf
                            <h3>আবেদনকারীর তথ্যঃ</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">ভর্তির বছর</label>
                                        <select class="form-control" name="add_id">
                                            <option selected value="">Select Admission Year</option>
                                            @foreach($batches as $b)
                                            <option value="{{$b->id}}">{{$b->batch_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">এস এস সি ব্যাচ</label>
                                        <select class="form-control" name="batch_id">
                                            <option selected value="">Select Batch</option>
                                            @foreach($batches as $b)
                                            <option value="{{$b->id}}">{{$b->batch_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">বিভাগ নাম</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <select class="form-control cat_id" aria-label="Defaul" name="cat_id" required>
                                            <option selected>Select Category</option>
                                            @foreach($categories as $item)
                                            <option value="{{$item->id}}">{{$item->cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">অংশগ্রহণের ফি</label>
                                        <div class="pay">
                                            <input type="text" class="form-control" name="pay" readonly>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">নাম</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
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
                                        <label for="f_name" class="form-label">পিতা/স্বামীর নাম</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="g_name" value="{{ old('f_name') }}" required autocomplete="Father Name" autofocus>

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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">মোবাইল নাম্বর</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
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
                                        <input id="mobile" type="text" class="form-control" name="fb_link">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">স্থায়ী ঠিকানা(বাড়ির নাম, গ্রাম, পোস্ট অফিস)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <input id="address" type="text" class="form-control" name="address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mailing_address" class="form-label">থানা/উপজেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <input id="mailing_address" type="text" class="form-control" name="thana" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">জেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <select class="form-control" aria-label="Defaul" name="district_id">
                                            <option selected value="">Select District</option>
                                            @foreach($districts as $item)
                                            <option value="{{$item->id}}">{{$item->district_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">বিভাগ</label>
                                        <select class="form-control" aria-label="Defaul" name="division_id">
                                            <option selected value="">Select Division</option>
                                            @foreach($divisions as $item)
                                            <option value="{{$item->id}}">{{$item->division_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="year" class="form-label">ব্লাড গ্রুপ</label>
                                        <select class="form-control" aria-label="Defaul" name="blood_id">
                                            <option selected value="">Select Blood Group</option>
                                            @foreach($bloods as $item)
                                            <option value="{{$item->id}}">{{$item->blood}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">পোশাক এর ধরণ</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <select class="form-control" id="mySelectBox" aria-label="Defaul" name="dress_cat_id">
                                            <option selected value="">Choose</option>
                                            @foreach($dresscategories as $item)
                                            <option value="{{$item->id}}">{{$item->d_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="img" class="form-label">ছবি</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z" />
                                        </svg>
                                        <input id="img" type="file" class="form-control" name="photo">
                                    </div>
                                </div>
                            </div>
                            <div id="register_table">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="category_id" class="form-label">ড্রেজ সাইজ (টিশার্ট)</label>
                                            <select class="form-control" aria-label="Defaul" name="size_id">
                                                <option selected value="">Tshirt Size</option>
                                                @foreach($thsirts as $item)
                                                <option value="{{$item->id}}">{{$item->size}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('images/t-size.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h3>বর্তমান কর্মস্থলঃ</h3>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="organization" class="form-label">প্রতিষ্ঠানের নাম</label>
                                        <input id="organization" type="text" class="form-control" name="organization">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="designation" class="form-label">পদবী</label>
                                        <input id="designation" type="text" class="form-control" name="designation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="mailing_address" class="form-label">প্রতিষ্ঠানের ঠিকানা</label>
                                        <input id="mailing_address" type="text" class="form-control" name="org_address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="reference" class="form-label">রেফারেন্স</label>
                                        <input id="reference" type="text" class="form-control" name="reference">
                                    </div>
                                </div>
                            </div>
                            <input id="status" type="text" class="form-control" name="status" value="Pending" required>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success" style="font-size:20px">
                                        যুক্ত করুন
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .log {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    #register_table {
        display: none;
    }

    #status {
        display: none;
    }

    .bi.bi-asterisk {
        color: #ff0202;
        margin-left: 8px;
        margin-top: -5px;
    }

    .pay input {
        pointer-events: none;
    }
</style>
@endsection