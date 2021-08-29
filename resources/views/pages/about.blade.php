<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="palestine.png"/>
  <meta name="description" content="من نحن ؟" />
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<title>About Me</title>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

@include('includes.navbar')

<style>
    h1 {
        color: white;
        text-align: center;
        margin-top: 40px;
    }

    @media screen and (max-width: 480px) {
        h1 {
            font-size: 20px;
        }
    }
</style>
<h1>How Did It All Start ?</h1>
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 10</div>
      <img src="n1.jpg" style="width:100%">
      <div class="text">1</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 10</div>
      <img src="n2.jpg" style="width:100%">
      <div class="text">2</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 10</div>
      <img src="n3.jpg" style="width:100%">
      <div class="text">3</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 10</div>
        <img src="n4.jpg" style="width:100%">
        <div class="text">4</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 10</div>
        <img src="n5.jpg" style="width:100%">
        <div class="text">5</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">6 / 10</div>
        <img src="n6.jpg" style="width:100%">
        <div class="text">6</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">7 / 10</div>
        <img src="n7.jpg" style="width:100%">
        <div class="text">7</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">8 / 10</div>
        <img src="n8.jpg" style="width:100%">
        <div class="text">8</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">9 / 10</div>
        <img src="n9.jpg" style="width:100%">
        <div class="text">9</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">10 / 10</div>
        <img src="n10.jpg" style="width:100%">
        <div class="text">10</div>
      </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
      <span class="dot" onclick="currentSlide(9)"></span>
      <span class="dot" onclick="currentSlide(10)"></span>
    </div>

    <div class="videoss">
        <h1>Inside the Battle for Jerusalem</h1>
        <video src="Inside the Battle for Jerusalem.mp4" class="vi" controls></video>
    </div>

    <div class="videoss">
        <h1>Whats Happen in sheikh Jarrah Neighborhood in palestine?</h1>
        <video src="vid3.mp4" class="vi" controls></video>
    </div>

    <h1>Videos explian better than text ? here you are</h1>
    <div class="videos">
        <div class="vid">
            <video src="vid1.mp4" controls></video>
        </div>
        <div class="vidd">
            <video src="vid2.mp4" controls></video>
        </div>
    </div>
<style>
    video {
        height: 530px;
        margin-left: 140px;
    }
    .videos {
        width: 90%;
        height: 550px;

        margin: auto;
        margin-top: 20px;
        display: flex;
    }
    .vid {
        width: 50%;
        height: 100%;

        margin-right: 50px;
    }
    .vidd {
        width: 50%;
        height: 100%;

    }

    .vi {
        width: 500px;
        height: 500px;
        margin-left: auto;
        margin-right:auto;
        display: block;
        margin-top: -10px;
    }

    @media screen and (max-width: 480px){
        .videos {
            display: flex;
            flex-direction: column;
            height: 1100px;
        }

        video {
            margin-left: 55px;
            height: 400px;
        }

        .vid, .vidd {
            height: 450px;
            width: 100%;
        }

        .vi {
            width: 400px;
        }
    }

    @media screen and (max-width: 400px) {
        .vi {
            width: 350px;
        }
    }
</style>
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
          max-width: 400px;
          position: relative;
          margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        @keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>



    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>
    <script>
        $(document).ready(function() {
          $('a.active').removeClass('active');
          $('a[href="' + location.pathname + '"]').closest('a').addClass('active');
        });
        </script>
