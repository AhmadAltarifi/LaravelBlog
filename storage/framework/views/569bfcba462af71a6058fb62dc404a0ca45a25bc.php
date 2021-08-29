<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="palestine.png"/>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Hashtags</title>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <style>

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
  <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <?php if(!Auth::guest()): ?>
    <a  href="learn/create" class="btn btn-primary">create hashtag</a>
    <?php endif; ?>
  <h2> Recently Trending Hashtags</h2>
  <?php $__currentLoopData = $learns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-4">
  <div class="card img-fluid">
  <img class="card-img-top" src="storage/course_image/<?php echo e($learn->course_image); ?>" alt="Card image" style="width:100%; margin:auto;">
    <div class="card-img-overlay">
        <h3 class="card-title"> <?php echo e($learn->Subject); ?> </h3>
      <h4 class="card-title"><?php echo e($learn->firstname); ?> <?php echo e($learn->lastname); ?></h4>
    <p class="card-text"><?php echo e($learn->body); ?></p>
      <a href="<?php echo e($learn->link); ?>" class="btn btn-primary">Tweet with the Hashtag</a>
      <?php if(!Auth::guest()): ?>
      <a class="btn btn-success" href="/learn/<?php echo e($learn->id); ?>/edit"style="margin-top:5px;">Edit Course</a>
      <?php echo Form::open(['action' => ['CourseController@destroy', $learn->id], 'method'=>'POST']); ?>

      <?php echo e(Form::hidden('_method', 'DELETE')); ?>

<?php echo e(Form::submit('Delete', ['class'=>"btn btn-danger"])); ?>

<?php echo Form::close(); ?>

      <?php endif; ?>
    </div>
  </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<style>
    @media  screen and (max-width: 480px) {
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







<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.goup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<script>
$(document).ready(function() {
  $('a.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('a').addClass('active');
});
</script>
</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/learn/index.blade.php ENDPATH**/ ?>