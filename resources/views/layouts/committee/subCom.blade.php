@extends('master_two')

@section('content')
<div id="com">
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <div class="card-title">
                    @foreach($subCommittee as $key=>$item)
                        @php 
                        if($key == 1)
                        {
                            break;
                        }
                        @endphp
                        <h3>সূূবর্ণ জয়ন্তী পরিচালনা {{$item->sublist->name}}</h3>
                    @endforeach
                </div>
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
                        @foreach($subCommittee as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->designation}}</td>
                            <td>{{$item->mobile_no}}</td>
                            <td>{{$item->email}}</td>
                            <td><img src="{{asset('images/sub_com/'. $item->image)}}" alt="" width="" height="100px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    #com{
        padding-top: 100px;
        padding-bottom: 180px;
    }
</style>
@endsection