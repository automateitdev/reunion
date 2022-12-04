@extends('master')

@section('content')
<div id="basic">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-25">
                    <!-- <a href="#">Applicant Information</a> -->
                    <!-- <button type="button" class="btn btn-default btn-rounded print pull-right" data-bs-toggle="modal" data-bs-target="#galleryModel">+ Add Gallery</button> -->
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-10 offset-md-1">
                <table class="table table-bordered" style="margin-top:30px;">
                    <thead>
                        <tr>
                            <th scope="col">সদস্য নং</th>
                            <th scope="col">নাম</th>
                            <th scope="col">ঠিকানা</th>
                            <th scope="col">আবেদনের তারিখ</th>
                            <th scope="col">ছবি</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i=1;
                        @endphp
                        @foreach($confirmations->unique('order_id') as $confirmation)
                       
                            @if($confirmation->msg == "Success")
                                @php 
                                    $participent = $participents->where('name', $confirmation->name)->where('mobile', $confirmation->mobile)->first();
                                @endphp
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$confirmation->name}}</td>
                                        <td>{{$participent->address ?? ''}}</td>
                                        <td>{{date('d-M-y', strtotime($confirmation->created_at))}}</td>
                                        <td><img src="{{asset('images/participent/'.$participent->photo) ?? ' '}}" alt="" width="100px" height="100px"></td>
                                    </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection