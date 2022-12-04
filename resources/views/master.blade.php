<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bhorebazar</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
   <style>
     @font-face {
    font-family: SutonnyOMJ;
    src: url('/fonts/SutonnyOMJ Regular.ttf');
    }
    body{
      font-family: SutonnyOMJ;
    }
   </style>

  </head>
  <body>
    @include('layouts.nav')
    @include('layouts.mainmenu')
    @yield('content')
    @include('layouts.footer')

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    <script src="{{asset('js/form.js')}}"></script>
    
  

  <script>
      var myCarousel = document.querySelector('#reunioncarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 10000,
        wrap: false
        });
  </script>
  <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Dec 5, 2022 15:37:25").getTime();

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
          
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
          
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          
        // Output the result in an element with id="demo"
        document.getElementById("redate").innerHTML = days + "D " + hours + "H "
        + minutes + "M " + seconds + "S ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("redate").innerHTML = "EXPIRED";
        }
      }, 1000);
  </script>
  <script>
      // var className = "bgChange";
      // var scrollTrigger = 60;

      // window.onscroll = function() {
      //   // We add pageYOffset for compatibility with IE.
      //   if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
      //     document.getElementsByClassName("navbar")[0].classList.add(className);
      //   } else {
      //     document.getElementsByClassName("navbar")[0].classList.remove(className);
      //   }
      // };
  </script>
  <script>
    $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
    });
  </script>
  </body>
</html>
