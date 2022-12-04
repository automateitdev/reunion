@extends('home')
     
@section('content')

<div id="sponsor">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-25">
                    <a href="#">উপকমিটি সম্পর্কিত সকল তথ্য</a> 
                    <a href="{{ route('sub-committe.create') }}" class="btn btn-default btn-rounded print pull-right">+ Add Sub Committee</a>
                </h2>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="col-md-10 offset-md-1">
                <table class="table table-bordered mt-5">
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Image</th>
                        
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($subCommittee as $info)
                    <tr>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->designation }}</td>
                        <td>{{ $info->mobile_no }}</td>
                        <td>{{ $info->email }}</td>
                        <td><img src="{{asset('images/sub_com/'. $info->image)}}" width="100px"></td>
                        <td style="display:flex;">

                            <a class="btn btn-primary mr-2" href="{{ route('sub-committe.edit',$info->id) }}">Edit</a>
                            <form action="{{ route('sub-committe.destroy',$info->id) }}" method="POST">
                
                                @csrf
                                @method('DELETE')
                    
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection