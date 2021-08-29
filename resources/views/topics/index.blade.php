
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="palestine.png"/>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/21aa11ea68.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    @include('includes.navbar')


    <title>Facts</title>
</head>
<body>

@include('includes.messages')



<style>
    h1, h2, h3, h4, h5, h6 {
        text-transform: none;
        text-align: start;
        unicode-bidi: plaintext;
    }
body {
    letter-spacing: 0px;
    }
    .card-header {
    color: white;
  }
.imagebox {
  position: relative;
  float: left;
width: 50%;
height: 350px;
margin-top: 10px;
}

.image-text {
  position: absolute;
  bottom: 10px;
  right: 7px;
  background-color: #181818;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}


@media screen and (max-width: 480px) {
    .image-text {
        padding-left: 5px;
  padding-right: 5px;
  bottom: 8px;
  right: 7px;
    }
    .image-text h4 {
        font-size: 15px;
    }
    .imagebox {
        position: relative;
        font-family: Arial;
        float: left;
        width: 50%;
        height: 200px;
}
}

.image-text a {
    text-decoration:none;
    text-transform: uppercase;
    color: white;
}

.image-text a:hover {
    color: #00aeda;
}

::selection {
  color: white;
  background: #181818;
}


.img-responsive {
  margin-left: auto;
  margin-right: auto;
  height: 300px;
}

.imagebox img {
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

@media screen and (max-width: 480px) {
  .imagebox {
    width: 100%;
    clear: both;
  }

  .img-responsive {
    margin-left: auto;
  margin-right: auto;
  height: 180px;
  }
}

.imagebox {
  background-color: grey;
}
</style>
<div class="container">
@if($a=0)
  @endif
    @foreach($topics as $topic)
    @if($a++ == 2)
    @break
    @endif

<div class="imagebox">
<a href="/topics/{{$topic->id}}">
  <img class="img-responsive"  src="/storage/topic_image/{{$topic->topic_image}}" alt="{{$topic->topic_image}}">
  <div class="image-text">
  <a href="/topics/{{$topic->id}}">
    <h4 dir="auto" style="font-family: 'El Messiri', sans-serif; text-transform: Uppercase;">{{$topic->title}}</h4>
</a>
  </div>
  </a>
</div>

@endforeach
</div>
    <div class="row" style="margin:auto; margin-top:20px; clear: both;">

        @foreach($topics as $topic)
        <div class="col-sm-4" style="margin-top:20px;">

        <div class="card mb-2">
  <h5 dir="auto" class="card-header" style="font-family: hel; margin-top: 0px; background:red; text-align: center;">{{$topic->Subject}}</h5>
  <div class="card-body">
    <h2 dir="auto" class="card-title" style="font-family: hel;  margin-top: 0px;"><a href="/topics/{{$topic->id}}">{{$topic->title}}</a></h2>
    <p class="card-subtitle text-muted">By: {{$topic->firstname}} {{$topic->lastname}}</p>
  </div>
  <a href="/topics/{{$topic->id}}">
  <img class="img-responsive" style="height: auto; margin: auto; border-radius: 15px;" src="/storage/topic_image/{{$topic->topic_image}}" alt="{{$topic->topic_image}}">
  </a>
  <div class="card-body">
      <h4 dir="auto" style=" font-family: hel;"> {{$topic->smalldes}} </h4>
  </div>
  <div class="card-body">
  <a class="btn btn-info" href="/topics/{{$topic->id}}" style="background-color: green" title="More Details">Read More</a>
  </div>
  <div class="card-footer text-muted" style="color: black;">
  Puplished At : {{$topic->created_at}}
  </div>
</div>
        </div>
     @endforeach
    </div>

<div style="text-align:center">
{{$topics->links()}}
</div>



@include('includes.goup')


<style>
.card-title a {
    text-decoration: none;
    color:black;
}
    .imgg {
        border: 1px solid red;
        width: 100%;
        height: 250px;
    }
    .imagetwo {
        height: 250px;
    }
    @media screen and (max-width: 900px) {
        .col-sm-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .imagetwo {
        height: 350px;
    }
    }
    @media screen and (max-width: 480px) {
        .imagetwo {
            height: 270px;
        }
    }

</style>

<script>
function sFunction() {
   var element = document.body;
   element.classList.toggle("light-mode");
}
</script>

</body>

</html>
