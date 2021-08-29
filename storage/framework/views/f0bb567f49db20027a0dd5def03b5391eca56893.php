
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="apple3.png"/>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=El+Messiri:600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">




    <title>News</title>
</head>
<body>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
.card-title a {
    text-decoration: none;
    color:black;
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


@media  screen and (max-width: 480px) {
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

.img-responsive {
  margin-left: auto;
  margin-right: auto;
  height: 300px;
}
@media  screen and (max-width: 480px) {
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

.imagebox img {
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.imagebox {
  background-color: grey;
}
</style>
<div class="container">
<?php if($a=0): ?>
  <?php endif; ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($a++ == 2): ?>
    <?php break; ?>
    <?php endif; ?>

<div class="imagebox">
<a href="/posts/<?php echo e($post->id); ?>">
<img class="img-responsive" style="" src="/storage/post_image/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_image); ?>">
  <div class="image-text">
  <a href="/posts/<?php echo e($post->id); ?>">
    <h4 dir="rtl" style="font-family: hel; text-align: right;"><?php echo e($post->title); ?></h4>
</a>
  </div>
  </a>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <div class="row" style="margin:auto; margin-top:20px; clear: both;">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4" style="margin-top:20px;">

        <div class="card mb-2" >
  <h5 class="card-header" style="text-align: right; margin-top: 0px; background:#00aeda; font-family: hel;"><?php echo e($post->Subject); ?></h5>
  <div class="card-body">
    <h2 dir="rtl" class="card-title" style="font-family: hel; text-align: center; margin-top: 0px;"><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h2>
    <a href="htts://www.instagram.com/d9_ahmad"
    style="text-decoration: none;"
    >
    <p class="card-subtitle text-muted">By: <?php echo e($post->firstname); ?> <?php echo e($post->lastname); ?></p>
    </a>
  </div>

  <a href="/posts/<?php echo e($post->id); ?>">
  <img class="img-responsive" style="height: auto; margin: auto; border-radius: 15px;" src="/storage/post_image/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_image); ?>">
  </a>
  <div class="card-body">
      <h4 dir="rtl" style="font-family:'Amiri', serif; text-align: right;"> <?php echo e($post->smalldes); ?> </h4>
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

<div style="text-align:center">
<?php echo e($posts->links()); ?>

</div>

<?php echo $__env->make('includes.socialbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.goup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<style>
}
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



</style>

<script>
function sFunction() {
   var element = document.body;
   element.classList.toggle("light-mode");
}
</script>

</body>

</html>
<?php /**PATH C:\Users\Ahmad Hamad\Desktop\Palestine\resources\views/posts/index.blade.php ENDPATH**/ ?>