<div class="navi">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                @php
                    $heee = DB::table('logos')->latest('id')->first();
                @endphp
                @if($heee->school_logo)
                    <a class="navbar-brandd lo ghyu"><img src="{{asset('images/logo_one/'. $heee->school_logo)}}" alt=""></a>
                @endif
                </div>
                <div class="col-sm-6 col-md-6 text-center">
                    <a href="#" class="title">ভোরবাজার এডভোকেট বেলায়েত হোসেন উচ্চ বিদ্যালয়</a>
                    <a href="#" class="title2"> ডাকঘরঃ ভোর বাজার, উপজেলাঃ সোনাগাজী, জেলাঃ ফেনী</a>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                        @if($heee->school_logo)
                            <a class="navbar-brandd lo"><img src="{{asset('images/logo_two/'. $heee->sg_logo)}}" alt=""></a>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif -->
                                    @endauth
                                </div>
                            @endif

                            <a href="{{ route('register') }}">
                            <button class="re_btn">register me</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<style>
.title,.title:hover {
  font-size: 30px;
  text-decoration: navajowhite;
  color: #fff;
  text-align: center;
}
.title2,.title2:hover {
  font-size: 20px;
  text-decoration: navajowhite;
  color: #fff;
  text-align: center;
  display: inline flow-root;
}
.lo img{
    width: 100px;
    height: 100px;
}
.navbar-brandd.lo.ghyu {
  float: right;
  margin-right: 30px;
}
</style>