<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="widtd=device-widtd, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=TiroBangla">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>bhorebazar</title>

  <link rel="stylesheet" href="{{asset('css/pdf.css')}}">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <link rel="stylesheet" href="{{asset('css/dashboard.scss')}}">

</head>

<body>
  @include('layouts.nav')
  @include('layouts.mainmenu')
  <div id="wq">
    <div class="container">
      <div class="row">
        <div class="card-header" id="photo">
          <div class="invoice_header">
            <div class="col-md-3">
              <img class="l_img" src="{{asset('images/sc_logo.jpg')}}" alt="" width="100px" height="100px">
            </div>
            <div class="col-md-6 text-center mid">
              <span style="text-align:center;"> <b>সুবর্ণ জয়ন্তী উৎসব ২০২৩ <br> ভোরবাজার এডভোকেট বেলায়েত হোসেন উচ্চ বিদ্যালয় </b> <br> ভোরবাজার,সোনাগাজী, ফেনী</span>

            </div>
            <div class="col-md-3">
              <img class="r_img" src="{{asset('images/suborno_logo.jpg')}}" alt="" width="100px" height="100px">
            </div>
          </div>
          <div class="content">
            <table>
              <colgroup>
                <col >
                <col >
                <col >
                <col >
              </colgroup>
              <tbody>
                @php
                  $confirmations = \App\Models\Confirmation::all();
                @endphp

                
                  @foreach($confirmations as $con)
                  @php 
                    $pa = $participents->where('name', $con->name)->where('mobile', $con->mobile)->first();
                    
                    @endphp
                    @if($con->msg == "Success" && $con->order_id == $finalOrder_id)
                    
                      <tr>
                        <td>সদস্য নংঃ</td>
                        <td>{{$con->id}}</td>
                        <td>তারিখঃ</td>
                        <td>{{date('d-M-y', strtotime($con->created_at))}}</td>
                      </tr>

                      <tr>
                        <td>নামঃ</td>
                        <td>{{$con->name}}</td>
                        <td>মোবাইল নাম্বারঃ</td>
                        <td>{{$con->mobile}}</td>
                      </tr>

                      <tr>
                        <td>পিতা/স্বামির নামঃ</td>
                        <td>{{$pa->g_name  ?? ''}}</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>ঠিকানাঃ</td>
                        <td>{{$pa->address  ?? ''}}</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>থানাঃ</td>
                        <td>{{$pa->thana  ?? ''}}</td>
                        <td>জেলাঃ</td>
                        <td>{{$pa->district->district_name  ?? ''}}</td>
                      </tr>
                      <tr>
                        <td>ড্রেসের ধরনঃ</td>
                        <td>{{$pa->dress->d_name  ?? ''}}</td>
                        <td>ড্রেস সাইজঃ</td>
                        <td>{{$pa->size->size ?? ''}}</td>
                      </tr>
                      <tr>
                        <td>ব্লাড গ্রুপঃ</td>
                        <td>{{$pa->blood->blood ?? ''}}</td>
                        <td>টাকার পরিমাণঃ</td>
                        <td>{{$con->amount}}</td>
                      </tr>
                    @endif
                  @endforeach
              </tbody>
            </table>

          </div>
          <p class="note">Note: This Confimation Letter was created on a software and is valid without the signature and seal.</p>
        </div>
      </div>
      <div class="row">
        <a href="#" onClick="window.print()" class="succ_card">
          <button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill " viewBox="0 0 16 16">
              <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
              <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            </svg>Download
          </button>
        </a>
      </div>
    </div>
  </div>


  @include('layouts.footer')


  <!-- Optional JavaScript; choose one of tde two! -->

  <!-- Option 1: Bootstrap Bundle witd Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="{{asset('js/form.js')}}"></script>
</body>

</html>