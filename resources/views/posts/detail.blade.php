<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/palestine.png"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee66e9e9efda54f"></script>
<link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<title>{!!$post->title!!}</title>
<style>
* {
  box-sizing: border-box;
}
h1, h2, h3, h4, h5, h6 {
        text-transform: none;
        text-align: start;
        unicode-bidi: plaintext;
    }
body {
  margin: 0px;
}

.leftcolumn {
  float: left;
  width: 75%;
}

.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
 ::selection {
   background-color: black;
   color: white;
 }

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


@include('includes.navbar')


<ol class="breadcrumb" style="margin-top: 10px;">
  <li class="breadcrumb-item"><a href="/index">Home</a></li>
  <li class="breadcrumb-item"><a href="/posts">News</a></li>
  <li class="breadcrumb-item"><a></a></li>
  <li class="breadcrumb-item active" style="text-align: right;">{!!$post->title!!}</li>
</ol>

<div class="row container" style="margin: auto;">
  <div class="leftcolumn">
    <div class="card">
      <h2 dir="auto" style="font-family: hel; text-align:center;">{!!$post->title!!}</h2>
      <h5>By: <a href="https://www.instagram.com/a7madaltarifi">{!!$post->firstname!!} {!!$post->lastname!!}</a></h5>
      <div class="detimage"><img class="img-responsive" src="/storage/post_image/{{$post->post_image}}" alt="{{$post->post_image}}" style=" margin: auto;"></div>
      <p>Published At : {!!$post->created_at!!}</p>
      <p> Share : </p>
                <div class="addthis_inline_share_toolbox" style="margin-left: 10px;"></div>
      <h4 dir="auto" style="font-family: 'SF Display', sans-serif; ">{!!$post->body!!}</h4>
      <a class="btn btn-info" href="/posts" style="margin-top:5px;">Back To News</a>
      @if(!Auth::guest())
      <a class="btn btn-success" href="/posts/{{$post->id}}/edit"style="margin-top:5px;">Edit Post</a>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST']) !!}
      {{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class'=>"btn btn-danger"])}}
{!! Form::close() !!}
@endif
<!-- ************************** Comments Section *************************** -->
<!--
<h1>
  Comments :
</h1>
<div class="container">
  <div class="row bootstrap snippets">
      <div class="col-md-8 col-sm-12">
          <div class="comment-wrapper">
            <ul class="media-list">
              <li class="media">
                  <a  class="pull-left">
                      <img src="/comment.png" alt="" class="img-circle">
                  </a>
                  <div class="media-body">
                      <span class="text-muted pull-right">
                          <small class="text-muted">30 min ago</small>
                      </span>
                      <strong class="text-success">@MartinoMont</strong>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                      </p>
                  </div>
              </li>
            </ul>
          </div>
      </div>
  </div>
</div>
-->
<!--
<div class=" pb-cmnt-container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body">
                    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    <input type="text" placeholder=" Your Name" width="100%">
                    <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
                    <form class="form-inline">
                        <div class="btn-group">
                            <button class="btn" type="button"><span class="fa fa-picture-o fa-lg"></span></button>
                            <button class="btn" type="button"><span class="fa fa-video-camera fa-lg"></span></button>
                            <button class="btn" type="button"><span class="fa fa-microphone fa-lg"></span></button>
                            <button class="btn" type="button"><span class="fa fa-music fa-lg"></span></button>
                        </div>
                        <button class="btn btn-info pull-right" type="button">Post</button>
                        {!! Form::close() !!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <h3>More News</h3>
      <h4  style="font-family: 'El Messiri', sans-serif;">- {!!$post->title!!}</h4>
      <div class="detimage" style="height: 150px;"><img class="img-responsive" style="height: 150px; margin: auto;" src="/storage/post_image/{{$post->post_image}}" alt="{{$post->post_image}}" style=" margin: auto;"></div>
    </div>
    <!--
    <div class="card">
      <h3>Follow Me</h3>
      <p><a href="https://www.instagram.com/a7madaltarifi" style="border-top-right-radius:15px;"><i class="fa fa-instagram"></i>    &nbsp;Instagram </a></p>
      <p>
      <a href="https://twitter.com/ahmad_altarifi9"><i class="fa fa-twitter"></i>    &nbsp;Twitter</a></p>
      <p>
  <a href="https://www.youtube.com/channel/UCMPDUXv4ge9OXvTAU-NHBVQ?view_as=subscriber" style="border-bottom-right-radius:15px;"><i class="fa fa-youtube"></i>    &nbsp;Youtube</a></p>
  <p>
      <a href="https://twitter.com/ahmad_altarifi9"><i class="fa fa-snapchat"></i>    &nbsp;Snapchat</a></p>
    </div>
  </div>-->
</div>


<style>
  .card h5 {
    text-transform: none;
  }
.detimage {

  width: 100%;
  height: 350px;
}
.img-responsive {
  height: 350px;
}
@media screen and (max-width: 480px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }

  .img-responsive {
    height:200px;
  }

  .detimage {
  height: 200px;
}
}
</style>
<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 10px;
        margin-left: 0px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }
    .comment-wrapper .panel-body {
    max-height:650px;
    overflow:auto;
}

.comment-wrapper .media-list .media img {
    width:64px;
    height:64px;
    border:2px solid #e5e7e8;
}

.comment-wrapper .media-list .media {
    border-bottom:1px dashed #efefef;
    margin-bottom:25px;
}
</style>


@include('includes.goup')
<!--@include('includes.socialbar')-->
</body>
</html>
