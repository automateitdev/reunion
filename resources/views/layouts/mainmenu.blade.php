<div id="main-menu">
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('landingPage')}}">হোম</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            বিদ্যালয় সম্পর্কিত
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">একটি নাম, একটি ইতিহাস</a></li>
                                <li><a class="dropdown-item" href="#">প্রতিষ্ঠাকাল ও নামকরণ</a></li>
                                <li><a class="dropdown-item" href="#">এডভোকেট বেলায়েত হোসেন  সাহেবের জীবন বৃন্তান্তঃ</a></li>
                                <li><a class="dropdown-item" href="#">প্র্রতিষ্ঠাতার নাম ও ব্যাক্তি পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="#">প্রাথমিক উদ্যোক্তাবৃন্দের নাম ও পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="#">স্কুল পরিচালনা পর্ষদ এর নাম ও পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="#">প্রধান শিক্ষক বৃন্দের নাম ও পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="#">সকল সফল শিক্ষার্থীর নাম ও পরিচিতি</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            শিক্ষা সম্পর্কিত
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">শিক্ষা কার্যক্রম</a></li>
                                <li><a class="dropdown-item" href="#">এসএসসি পরীক্ষার ফলাফল</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                সূবর্ণজয়ন্তী ২০২৩ সম্পর্কিত
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('main.com.view')}}">সূূবর্ণ জয়ন্তী পরিচালনা মূল কমিটি</a></li>
                                <li><a class="dropdown-item" href="{{route('sub.com.view')}}">সূূবর্ণ জয়ন্তী পরিচালনা শাখা কমিটি</a></li>
                                <li><a class="dropdown-item" href="{{route('branch.com.view')}}">সূূবর্ণ জয়ন্তী পরিচালনা উপ শাখা কমিটি</a></li>
                                <li><a class="dropdown-item" href="{{route('applicantlist.index')}}">আবেদনকারীর তালিকা</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ভোর বাজার সম্পর্কিত
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">নামকরণ, ইতিবৃত্ত ও পরিধি</a></li>
                                <li><a class="dropdown-item" href="#">বিভিন্ন শিক্ষা প্রতিষ্ঠানের নাম ও পরিচিতি</a></li>
                                <li><a class="dropdown-item" href="#">স্বনামধন্য ব্যাক্তিবর্গের নাম ও পরিচিতি</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
    </div>
</div>

<style>
   #main-menu{
    background-color: #04913d;
   }
   #main-menu .container .row .navbar #navbarNav ul li a{
    color: #fff;
    font-size: 21px;
    padding-right: 30px;
   }
   .navbar-expand-lg {
        z-index: 999;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
        background-color: #04913d;
    }
    .dropdown-item:focus, .dropdown-item:hover {
        background-color: #2472bf;
    }
</style>