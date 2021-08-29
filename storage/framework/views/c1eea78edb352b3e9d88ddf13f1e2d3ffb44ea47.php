<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="apple3.png"/>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Courses</title>
    <style>
        body {
          background-image: url('/code1.jpg');
          background-size: cover;
          background-repeat: no-repeat;        
        }
        .container {
          margin-top: 50px;
        }
        .container h2 {
          color: white;
          border-bottom: 1px dashed #00aeae;
        }
    </style>
</head>
<body>

<div class="container">
  <h2> Current Available Courses</h2>
  <div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="html.svg" alt="Card image" style="width:50%">
    <div class="card-img-overlay">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. Some example text some example text. Some example text some example text. Some example text some example text.</p>
      <a href="https://www.youtube.com/watch?v=W0mV1fyIrEQ&list=PLDZt7V-Ca8eavo1x0eJcnBjJgBbbU6PqJ" class="btn btn-primary">Watch On Youtube</a>
    </div>
  </div>
</div>


















<script>
$(document).ready(function() {
  $('a.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('a').addClass('active'); 
});
</script>
</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/pages/programming.blade.php ENDPATH**/ ?>