<div class="sponsor">
    <div class="container">
        <div class="up-town">
            <h3>যাদের প্রতি আমরা কৃতজ্ঞ</h3>
            <img src="{{asset('images/line1.png')}}" alt="">
        </div>
        <div class="speaker-gallery">
            <div class="row">
            @foreach($sponsorinfos as $item)
                <div class="col-md-3 text-center dd">
                    <img src="{{asset('images/sponsor/'. $item->image)}}" alt="">
                    <h3 style="color: #fff;">{{$item->name}}</h3>
                    <p style="color: #fff;">{{$item->address}}</p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>