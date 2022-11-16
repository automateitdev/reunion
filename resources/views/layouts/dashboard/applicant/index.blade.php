@extends('home')

@section('content')
<div id="basic">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-25">
                    <a href="#">Applicant Information</a>
                    <!-- <button type="button" class="btn btn-default btn-rounded print pull-right" data-bs-toggle="modal" data-bs-target="#galleryModel">+ Add Gallery</button> -->
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-10 offset-md-1">
                <table class="table table-bordered" style="margin-top:30px;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No.</th>
                            <th scope="col">Organization</th>
                            <th scope="col">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($confirmations as $confirmation)
                            @if($confirmation->msg == Success)
                                @foreach($participents as $item)
                                    @if($confirmation->name == $item->name && $confirmation->mobile == $item->mobile)
                                        <tr>
                                            <th scope="row">{{$confirmation->id}}</th>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->mobile}}</td>
                                            <td>{{$item->organization}}</td>
                                            <td><img src="{{asset('images/participent/'.$item->photo)}}" alt="" width="100px" height="100px"></td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection