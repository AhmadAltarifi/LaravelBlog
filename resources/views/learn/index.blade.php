<!DOCTYPE html>
<html>
<head>
    @include('includes.messages')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="palestine.png"/>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee66e9e9efda54f"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Hashtags</title>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <style>
        h1, h2, h3, h4, h5, h6 {
        text-transform: none;
        text-align: start;
        unicode-bidi: plaintext;
    }
        .container {
          margin-top: 50px;
        }
        .container h2 {
          color: white;

        }
        .card-img-overlay {
            color: white;
        }
        .card {
          width: 100%;
        }
    </style>
</head>
<body>
  @include('includes.navbar')

<div class="container">
    @if(!Auth::guest())
    <a  href="learn/create" class="btn btn-primary">create hashtag</a>
    @endif
  <h2> Recently Trending Hashtags</h2>
  @foreach ($learns as $learn)
  <div class="col-sm-4">
  <div class="card img-fluid">
  <img class="card-img-top" src="storage/course_image/{{$learn->course_image}}" alt="Card image" style="width:100%; margin:auto;">
    <div class="card-img-overlay">
        <h3 class="card-title"> {{$learn->Subject}} </h3>
      <h4 class="card-title">{{$learn->firstname}} {{$learn->lastname}}</h4>
    <p class="card-text">{{$learn->body}}</p>
      <a href="{{$learn->link}}" class="btn btn-primary">Tweet with the Hashtag</a>
      <p> Share : </p>
                <div class="addthis_inline_share_toolbox" style="margin-left: 10px;"></div>
      @if(!Auth::guest())
      <a class="btn btn-success" href="/learn/{{$learn->id}}/edit"style="margin-top:5px;">Edit Course</a>
      {!! Form::open(['action' => ['CourseController@destroy', $learn->id], 'method'=>'POST']) !!}
      {{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>"btn btn-danger"])}}
{!! Form::close() !!}
      @endif
    </div>
  </div>
  </div>
  @endforeach
</div>

<style>
    @media screen and (max-width: 480px) {
        .col-sm-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .container {
          width: 100%;
          margin-left: 0px;
        }
        .container h2 {
          color: white;
          width: 100%;
          font-size: 30px;
          margin-left: auto;
        }
        .card-title, .card-text{
          width: 100%;
        }

    }
</style>







@include('includes.footer')
@include('includes.goup')






<script>
$(document).ready(function() {
  $('a.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('a').addClass('active');
});
</script>
</body>
</html>
