
@extends('master_two')

@section('content')
<style>
    #com{
        padding-top: 100px;
        padding-bottom: 180px;
    }
</style>

<div id="com">
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <div class="card-title"><h3>সূূবর্ণ জয়ন্তী পরিচালনা মূল কমিটি</h3></div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">নাম</th>
                        <th scope="col">পদবী</th>
                        <th scope="col">মোবাইল নাম্বার</th>
                        <th scope="col">ইমেইল</th>
                        <th scope="col">ছবি</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($managementInfo as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->designation}}</td>
                            <td>{{$item->mobile_no}}</td>
                            <td>{{$item->email}}</td>
                            <td><img src="{{asset('images/main_com/'. $item->image)}}" alt="" width="" height="100px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection