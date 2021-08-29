<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  letter-spacing: 0px;
}

.topnav {
  overflow: hidden;
  background-color: #181818;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Nunito', sans-serif;
  transition: 0.5s;
}

.topnav a:hover {
  background-color: rgb(56, 56, 56);
  color: whites;
}

.topnav a.active {
  background-color: rgb(56, 56, 56);
  color: #00aeda;
}

.topnav .icon {
  display: none;
}


@media  screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media  screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
</head>
<body>

<div class="topnav" id="myTopnav">
<a href="/index" style="font-family: 'Pacifico', cursive;"><img src="<?php echo e(asset('palestine (1).png')); ?>" style="height:32px; width:32px;">&nbsp;#Free_Palestine</a>
  <a href="/index" class="active">Home</a>
  <a href="/posts">News</a>
  <a href="/topics">Hastags</a>
  <!--<a href="/learn">Programming Cousrces</a>-->
  <a href="/about">How All the story had Start</a>
  <?php if(!Auth::guest()): ?>
  <a style="color: white;" class="pull-right" onclick="sFunction()">Switch to light mode</a>
  <a href="/posts/create">Create News</a>
  <a href="/topics/create">Create Hashtag</a>
  <!--<a href="/learn/create">Create Course</a>-->
  <a href="/login" style="float: right;"><?php echo e(Auth::user()->name); ?></a>
  <a href="/register" style="float: right;">Register</a>
  <a href="/login" style="float: right; height:14px;"><img src="<?php echo e(asset('login.png')); ?>"></a>
  <?php endif; ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<script>
$(document).ready(function() {
  $('a.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('a').addClass('active');
});
</script>




</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\Desktop\Palestine\resources\views/includes/navbar.blade.php ENDPATH**/ ?>