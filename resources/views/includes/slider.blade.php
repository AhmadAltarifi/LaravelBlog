@include('includes.messages')


<div id="mycarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>

  </ol>


  <div class="carousel-inner" role="listbox">
    <div class="item active">
    @if($i=0)
  @endif
    @foreach($posts as $post)
    @if($i++ == 1)
    @break
    @endif
    <a href="/posts/{{$post->id}}">
      <img style="width: 100%; height: auto;" src="/storage/post_image/{{$post->post_image}}" alt="{{$post->post_image}}" data-color="lightblue" alt="First Image">
</a>
      @endforeach
      <div class="carousel-caption mycolor4">
      @if($i=0)
  @endif
    @foreach($posts as $post)
    @if($i++ == 1)
    @break
    @endif
    <a href="/posts/{{$post->id}}">
    <div class="image-text">
  <a href="/posts/{{$post->id}}">
    <h4 dir="auto" style="font-family: hel; text-align: center;">{{$post->title}}</h4>
</a>
  </div>
</a>
        @endforeach
      </div>
    </div>
    <div class="item">
    @if($i=0)
  @endif
    @foreach($topics as $topic)
    @if($i++ == 1)
    @break
    @endif
    <a href="/topics/{{$topic->id}}">
      <img style="width: 100%; height: auto;" src="/storage/topic_image/{{$topic->topic_image}}" alt="{{$topic->topic_image}}" data-color="firebrick" alt="Second Image" >
</a>
      @endforeach
      <div class="carousel-caption mycolor4">
      @if($i=0)
  @endif
    @foreach($topics as $topic)
    @if($i++ == 1)
    @break
    @endif
    <div class="image-text">
  <a href="/topics/{{$topic->id}}">
    <h4 dir="auto" style="font-family: hel; text-align: center;">{{$topic->title}}</h4>
</a>
  </div>
        @endforeach
      </div>
    </div>

    <div class="item">
        @if($i=0)
      @endif
        @foreach($learns as $learn)
        @if($i++ == 1)
        @break
        @endif
        <a href="/learn">
          <img style="width: 100%; height: auto;" src="/storage/course_image/{{$learn->course_image}}" alt="{{$learn->course_image}}" data-color="firebrick" alt="Second Image" >
    </a>
          @endforeach
          <div class="carousel-caption mycolor4">
          @if($i=0)
      @endif
        @foreach($learns as $learn)
        @if($i++ == 1)
        @break
        @endif
        <div class="image-text">
      <a href="/learn">
        <h4 dir="auto" style="font-family: hel; text-align: center;">{{$learn->title}}</h4>
    </a>
      </div>
            @endforeach
          </div>
        </div>


  </div>

</div>

<style>

@media screen and (max-width:480px){
.carousel {
  height: 400px;
}

.carousel-caption {
  height: 100px;
}


}

.carousel-caption h1,
.carousel-caption h2,
.carousel-caption h3,
.carousel-caption h4,
.carousel-caption h5,
.carousel-caption h6{
 color: white;
  text-transform: uppercase;
 }

.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
}

.carousel-inner .item{
   height:400px;
   background-size:cover;
   background-position: center center;
}

.item {
    height: 400px;
}
.carousel-indicators {
  bottom: -28px;
}

.carousel-indicators li {
    background: white;
}

.carousel-indicators .active {
    background: #00aeda;
}


</style>
<script>
$('.carousel').carousel({
  interval: 2500,
  pause: "false"
});
</script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<style>
.image-text {
  background-color: #181818;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 5px;
  padding-bottom: 5px;
  bottom: 10px;
}
.image-text h4 {
    div:lang(en) { direction: ltr; }
    div:lang(ar) { direction: rtl; }
}
@media screen and (max-width: 480px) {
    .image-text {
        padding-left: 5px;
  padding-right: 5px;
  bottom: 110px;
  right: auto;
    }
    .image-text h4 {
        font-size: 17px;
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
</style>
