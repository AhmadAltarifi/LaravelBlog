<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="apple3.png"/>
  <meta name="description" content="موقع أردني عربي متخصص بالتقنية بشكل عام وبالايفون وشركة Apple بشكل خاص" />
  <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <title>Home</title>
</head>



<body>

<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--<div class="trending">
    <h1> Trending : </h1>
<marquee behavior="scroll" direction="right" bgcolor="#111" scrolldelay="60" ><h1> مؤتمر ابل القادم </h1></marquee>
</div>-->
<div class="bigtitle"><h3 style="font-family: 'El Messiri', sans-serif;">Latest News From Palestine</h3></div>



<div class="row" style="margin:auto; margin-top:20px; clear: both;">
  <?php if($i=0): ?>
    <?php endif; ?>
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($i++ == 3): ?>
      <?php break; ?>
      <?php endif; ?>
      <div class="col-sm-4" style="margin-top:20px;">


      <div class="card mb-2">
  <h5 class="card-header" style="font-family: hel; text-align: right; margin-top: 0px; background:#00aeda;"><?php echo e($post->Subject); ?></h5>
  <div class="card-body">
    <h2 dir="rtl" class="card-title" style="font-family: hel; margin-top: 0px; text-align: center;"><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h2>
    <p class="card-subtitle text-muted">By: <?php echo e($post->firstname); ?> <?php echo e($post->lastname); ?></p>
  </div>
  <a href="/posts/<?php echo e($post->id); ?>">
  <img class="img-responsive" style="height: auto; margin: auto; border-radius: 15px;" src="/storage/post_image/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_image); ?>">
  </a>
  <div class="card-body">
  <h4 dir="rtl" class="pull-right" style="font-family:'Amiri', serif; text-align: right;"> <?php echo e($post->smalldes); ?> </h4>
  </div>
  <div class="card-body">
  <a class="btn btn-info" href="/posts/<?php echo e($post->id); ?>" title="More Details">Read More</a>
  </div>
  <div class="card-footer text-muted" style="color: black;">
  Puplished At : <?php echo e($post->created_at); ?>

  </div>
</div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="bigtitle"><a href="/posts"><h3 style="font-family: 'El Messiri', sans-serif;">اضغط هنا لقراة جميع الأخبار</h3></a></div>
<hr style="width: 80%;">
<div class="bigtitle"><h3>Latest Articles | أحدث المقالات</h3></div>

<div class="row" style="margin:auto; margin-top:20px; clear: both;">
  <?php if($i=0): ?>
    <?php endif; ?>
      <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($i++ == 3): ?>
      <?php break; ?>
      <?php endif; ?>
      <div class="col-sm-4" style="margin-top:20px;">


      <div class="card mb-2">
  <h5 class="card-header" style="margin-top: 0px; background:#00aeda; font-family: hel; text-align: right;"><?php echo e($topic->Subject); ?></h5>
  <div class="card-body">
    <h2 class="card-title" style="font-family: hel; text-align: center;"><a href="/topics/<?php echo e($topic->id); ?>"><?php echo e($topic->title); ?></a></h2>
    <p class="card-subtitle text-muted">By: <?php echo e($topic->firstname); ?> <?php echo e($topic->lastname); ?></p>
  </div>
  <a href="/topics/<?php echo e($topic->id); ?>">
  <img class="img-responsive" style="height: auto; margin: auto; border-radius: 15px;" src="/storage/topic_image/<?php echo e($topic->topic_image); ?>" alt="<?php echo e($topic->topic_image); ?>">
  </a>
  <div class="card-body">
  <h4 dir="rtl" class="pull-right" style="font-family:'Amiri', serif;"> <?php echo e($post->smalldes); ?> </h4>
  </div>
  <div class="card-body">
  <a class="btn btn-info" href="/topics/<?php echo e($topic->id); ?>">Read More</a>
  </div>
  <div class="card-footer text-muted" style="color: black;">
  Puplished At : <?php echo e($topic->created_at); ?>

  </div>
</div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="bigtitle"><a href="/topics"><h3 style="font-family: 'El Messiri', sans-serif;">اضغط هنا لقراءة جميع المقالات</h3></a></div>
<hr style="width: 80%;">
<div class="bigtitle"><h3>Latest Courses | أحدث الدورات</h3></div>

<div class="row" style="margin:auto; margin-top:20px; clear: both;">
  <?php if($i=0): ?>
    <?php endif; ?>
      <?php $__currentLoopData = $learns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($i++ == 3): ?>
      <?php break; ?>
      <?php endif; ?>
      <div class="col-sm-4" style="margin-top:20px;">


      <div class="card mb-2">
  <h5 class="card-header" style="margin-top: 0px; background:#00aeda; font-family: hel;"><?php echo e($learn->Subject); ?></h5>
  <div class="card-body">
    <h2 class="card-title" style="font-family: hel; text-align: center;"><a href="/learn"><?php echo e($learn->title); ?></a></h2>
    <p class="card-subtitle text-muted">By: <?php echo e($learn->firstname); ?> <?php echo e($learn->lastname); ?></p>
  </div>
  <a href="/learn">
  <img class="img-responsive" style="height: auto; margin: auto; border-radius: 15px;" src="/storage/course_image/<?php echo e($learn->course_image); ?>" alt="<?php echo e($learn->course_image); ?>">
  </a>
  <div class="card-body">
  <h4 dir="rtl" class="pull-right" style="font-family:'Amiri', serif;"> <?php echo e($learn->smalldes); ?> </h4>
  </div>
  <div class="card-body">
  <a class="btn btn-info" href="/learn">Read More</a>
  </div>
  <div class="card-footer text-muted" style="color: black;">
  Puplished At : <?php echo e($learn->created_at); ?>

  </div>
</div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="bigtitle"><a href="/learn"><h3 style="font-family: 'El Messiri', sans-serif;">اضغط هنا لمتابعة جميع الدورات</h3></a></div>



<!--<?php echo $__env->make('includes.socialbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.goup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
.card-title a {
    text-decoration: none;
    color:black;
}
  .card-header {
    color: white;
  }
    .imgg {
        border: 1px solid red;
        width: 100%;
        height: 250px;
    }
    .imagetwo {
        height: 250px;
    }
    @media  screen and (max-width: 900px) {
        .col-sm-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .imagetwo {
        height: 350px;
    }
    }
    @media  screen and (max-width: 480px) {
        .imagetwo {
            height: 270px;
        }
    }

    ::selection {
  color: white;
  background: #181818;
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
<?php /**PATH C:\Users\Ahmad Hamad\Desktop\Palestine\resources\views/pages/index.blade.php ENDPATH**/ ?>