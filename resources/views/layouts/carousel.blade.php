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

<div class="carouseltop">
    <!-- <h4 class="title_name">সুবর্ণ জয়ন্তী উৎসব ২০২৩</h4> -->
    <!-- <p id="redate"></p> -->
    <!-- <a href="{{ route('register') }}">
    <button class="re_btn">register me</button>
    </a> -->
    
</div>
