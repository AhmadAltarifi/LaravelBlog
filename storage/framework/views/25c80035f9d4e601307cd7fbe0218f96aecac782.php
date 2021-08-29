<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="/palestine.png"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ee66e9e9efda54f"></script>
    <link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<title><?php echo $topic->title; ?></title>
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

@media  screen and (max-width: 800px) {
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

<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<ol class="breadcrumb" style="margin-top: 10px;">
  <li class="breadcrumb-item"><a href="/index">Home</a></li>
  <li class="breadcrumb-item"><a href="/topics">Articles </a></li>
  <li class="breadcrumb-item"><a></a></li>
  <li dir="auto" class="breadcrumb-item active"><?php echo $topic->title; ?></li>
</ol>
<div class="row container" style="margin: auto;">
  <div class="leftcolumn">
    <div class="card">
    <h2 dir="auto" style="font-family: hel; text-align: center;"><?php echo $topic->title; ?></h2>
      <h5>By: <a href="https://www.instagram.com/a7madaltarifi"><?php echo $topic->firstname; ?> <?php echo $topic->lastname; ?></a></h5>
      <div class="detimage"><img class="img-responsive" src="/storage/topic_image/<?php echo e($topic->topic_image); ?>" alt="<?php echo e($topic->topic_image); ?>" style=" margin: auto;"></div>
      <p>Published At : <?php echo $topic->created_at; ?></p>
      <p> Share : </p>
                <div class="addthis_inline_share_toolbox" style="margin-left: 10px;"></div>
                <h4 dir="auto" style="font-family: 'SF Display', sans-serif;"><?php echo $topic->body; ?></h4>
      <a class="btn btn-info" href="/topics" style="margin-top:5px;">Back To Articles</a>
      <?php if(!Auth::guest()): ?>
      <a class="btn btn-success" href="/topics/<?php echo e($topic->id); ?>/edit"style="margin-top:5px;">Edit Post</a>
      <?php echo Form::open(['action' => ['TopicController@destroy', $topic->id], 'method'=>'POST']); ?>

      <?php echo e(Form::hidden('_method', 'DELETE')); ?>

<?php echo e(Form::submit('Delete', ['class'=>"btn btn-danger"])); ?>

<?php echo Form::close(); ?>

<?php endif; ?>

    </div>

  </div>
  <div class="rightcolumn">
    <!--<div class="card">
      <h3>More Articles</h3>
      <h4>- <?php echo $topic->title; ?></h4>
      <div class="detimage" style="height: 150px;"><img class="img-responsive" style="height: 150px; margin: auto;" src="/storage/topic_image/<?php echo e($topic->topic_image); ?>" alt="<?php echo e($topic->topic_image); ?>" style=" margin: auto;"></div>
    </div>-->
    <div class="card">
      <!--<h3>Follow Me</h3>
      <p><a href="https://www.instagram.com/d9_ahmad" style="border-top-right-radius:15px;"><i class="fa fa-instagram"></i>    &nbsp;Instagram </a></p>
      <p>
      <a href="https://twitter.com/ahmad_altarifi9"><i class="fa fa-twitter"></i>    &nbsp;Twitter</a></p>
      <p>
  <a href="https://www.youtube.com/channel/UCMPDUXv4ge9OXvTAU-NHBVQ?view_as=subscriber" style="border-bottom-right-radius:15px;"><i class="fa fa-youtube"></i>    &nbsp;Youtube</a></p>
  <p>
      <a href="https://twitter.com/ahmad_altarifi9"><i class="fa fa-snapchat"></i>    &nbsp;Snapchat</a></p>
    </div>-->
  </div>
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
@media  screen and (max-width: 480px) {
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



<?php echo $__env->make('includes.goup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/topics/detail.blade.php ENDPATH**/ ?>