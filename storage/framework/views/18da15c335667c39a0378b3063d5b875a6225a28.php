
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">


    <title>Document</title>
</head>
<body>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       


<div class="row container" style="margin: auto; margin-top:30px;">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-4">
  
  <div class="panel panel-primary">
      <div class="panel-heading">
      <h4>
      <?php echo e($post->Subject); ?>

      </h4>
      </div>
      <div class="panel-body">
      <h5 style="text-transform:uppercase"> <?php echo e($post->firstname); ?> <?php echo e($post->lastname); ?> </h5>
      <button type="button" class="btn btn-danger">Puplished At : <?php echo e($post->created_at); ?></button>

      <h3>

      <?php echo $post->title; ?>

      
      </h3>
      <img class="img-responsive" src="/storage/post_image/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_image); ?>">

      <a class="btn btn-success" href="/posts/<?php echo e($post->id); ?>"style="margin-top:5px;">Read More</a>
      </div>
    </div>





</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<div style="text-align:center">
<?php echo e($posts->links()); ?>

</div>

</body>
</html><?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views//posts/index.blade.php ENDPATH**/ ?>