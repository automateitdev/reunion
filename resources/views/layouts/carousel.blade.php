<div id="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div id="reunioncarousel" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            @foreach($sliders as $key =>$item)
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
              <img src="{{asset('images/slider/'. $item->slider_img)}}" class="d-block" alt="...">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#reunioncarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#reunioncarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <!-- <div class="carouseltop"> -->
          <!-- <h4 class="title_name">সুবর্ণ জয়ন্তী উৎসব ২০২৩</h4> -->
          <!--  -->
          <!-- <a href="{{ route('register') }}">
      <button class="re_btn">register me</button>
      </a> -->

        <!-- </div> -->
      </div>
      <div class="col-md-3">
        <div class="content">
          <div class="one">
            <p>আবেদনের শেষ তারিখ</p>
            <p>৩১ ডিসেম্বর ২০২২</p>
            <p id="redate"></p>
          </div>
          <div class="three">
            <p>সুবর্ণ জয়ন্তী উৎসবের তারিখ</p>
            <p>১৮ ফেব্রুয়ারী ২০২৩</p>
            <p id="programdate"></p>
          </div>
          <div class="four">
            <a href="{{ route('register') }}">
              <button class="re_btn btn">রেজিস্ট্রেশন করুন</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>