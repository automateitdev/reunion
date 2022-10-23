<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=TiroBangla">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>bhorebazar</title>

    <link rel="stylesheet" href="{{public_path('css/pdf.css')}}">
    <link rel="stylesheet" href="{{public_path()}}">

<style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;700&display=swap');

  @page {
    size: 9.25in 6.55in;
    margin: 0mm 0mm 0mm 0mm;
  }
  *{font-family: 'Noto Sans Bengali', sans-serif;}
  
  .invoice_header{
    display: table;
    flex-wrap: nowrap;
    background-color: #53bf5e;
    justify-content: space-between;
    padding: 20px;
    width: 100%;
  }
  .invoice_header > div{
    display: table-cell;
    text-align: center;
    vertical-align: middle;
  }
  input{
    outline: none;
    border: 1px solid #272b2b;
    margin-bottom: 15px;
  }
  .content {
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  padding: 20px;
  }
  .note {
  text-align: center;
  background-color: #36753c;
  color: #fff;
  padding: 12px;
  }
  .left_title{
    display: table;
  }
  .right_title{
    display: table;
  }
  .table-cell{
    display: table-cell;
  }
  table tr td{
    margin: 2px;
    vertical-align: middle;
    text-align: left;
  }
  table {
  width: 100%;
  text-align: left;
}

    </style>
  </head>

  <body style="font-family: TiroBangla, serif;">
        <div class="card-header" id="photo">
            <div class="invoice_header">
                <div class="col-md-3">
                    <img class="l_img" src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('images/sc_logo.jpg')))}}" alt="" width="100px" height="100px">
                </div>
                <div class="col-md-6 text-center mid">
                    <span style="text-align:center;"> <b style="font-size: 25x;">ভোরবাজার Bhor Bazar Advocate Belayet Hossain High School </b> <br> Bhor Bazar, Sonagazi, Feni</span>
                   
                </div>
                <div class="col-md-3">
                    <img class="r_img" src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('images/suborno_logo.jpg')))}}" alt="" width="100px" height="100px">
                </div>
            </div>
            <div class="content">
              <table>
              <colgroup>
                  <col span="2">
                  <col span="2">
                  <col span="2">
                  <col span="2">
                </colgroup>
                <tbody>
                @foreach($participents as $pa)
                  <tr>
                    <td>Member No.</td>
                    <td>{{$pa->id}}</td>
                    <td>Date</td>
                    <td>{{date('d-M-y', strtotime($pa->created_at))}}</td>
                  </tr>
                
                  <tr>
                    <td>Name</td>
                    <td>{{$pa->name}}</td>
                    <td>Mobile No.</td>
                    <td>{{$pa->mobile}}</td>
                  </tr>
                  
                  <tr>
                    <td>Father/Husband Name</td>
                    <td>{{$pa->g_name}}</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>{{$pa->address}}</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Upazila</td>
                    <td>{{$pa->thana}}</td>
                    <td>District</td>
                    <td>{{$pa->district->district_name}}</td>
                  </tr>
                  <tr>
                    <td>Dress Type</td>
                    <td>{{$pa->dress->d_name}}</td>
                    <td>T-Shirt Size</td>
                    <td>{{$pa->size->size ?? ''}}</td>
                  </tr>
                  <tr>
                    <td>Blood Group</td>
                    <td>{{$pa->blood->blood ?? ''}}</td>
                    <td>Registration Fee</td>
                    <td>{{$pa->categories->price}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
             
            </div>
            <p class="note">Note: This Confimation Letter was created on a computer and is valid witdout tde signature and seal.</p>
        </div>


        

    <!-- Optional JavaScript; choose one of tde two! -->

    <!-- Option 1: Bootstrap Bundle witd Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
