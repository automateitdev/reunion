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
                        @foreach($confirmations as $confirmation)
                            @foreach($participents as $item)
                                @if($confirmation->name == $item->name && $confirmation->mobile == $item->mobile)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{date('d-M-y', strtotime($item->created_at))}}</td>
                                        <td><img src="{{asset('images/participent/'.$item->photo)}}" alt="" width="100px" height="100px"></td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection