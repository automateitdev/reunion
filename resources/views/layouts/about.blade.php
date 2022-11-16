<div class="about">
    <div class="container">
        <div class="row">
                @php
                    $abs = DB::table('abouts')->latest('id')->first();
                @endphp
            <div class="col-md-7">
                <div class="about-title">
                    <h3 class="sdrYt">সুবর্ণ জয়ন্তী উৎসব ২০২৩</h3>
                </div>
                <div class="reunion-content">
                    @if($abs->content_one)
                    <p>{{$abs->content_one}}</p>
                    @endif
                    @if($abs->content_two)
                    <p>{{$abs->content_two}}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="about-img">
                @if($abs->abimg)
                    <img src="{{asset('images/about/'. $abs->abimg)}}" alt="">
                @endif
                </div>
            </div>
        </div>
    </div>
</div>