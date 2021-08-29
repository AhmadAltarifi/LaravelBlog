<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="mycarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>

  </ol>


  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <?php if($i=0): ?>
  <?php endif; ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ == 1): ?>
    <?php break; ?>
    <?php endif; ?>
    <a href="/posts/<?php echo e($post->id); ?>">
      <img style="width: 100%; height: auto;" src="/storage/post_image/<?php echo e($post->post_image); ?>" alt="<?php echo e($post->post_image); ?>" data-color="lightblue" alt="First Image">
</a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="carousel-caption mycolor4">
      <?php if($i=0): ?>
  <?php endif; ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ == 1): ?>
    <?php break; ?>
    <?php endif; ?>
    <a href="/posts/<?php echo e($post->id); ?>">
    <div class="image-text">
  <a href="/posts/<?php echo e($post->id); ?>">
    <h4 dir="auto" style="font-family: hel; text-align: center;"><?php echo e($post->title); ?></h4>
</a>
  </div>
</a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="item">
    <?php if($i=0): ?>
  <?php endif; ?>
    <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ == 1): ?>
    <?php break; ?>
    <?php endif; ?>
    <a href="/topics/<?php echo e($topic->id); ?>">
      <img style="width: 100%; height: auto;" src="/storage/topic_image/<?php echo e($topic->topic_image); ?>" alt="<?php echo e($topic->topic_image); ?>" data-color="firebrick" alt="Second Image" >
</a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="carousel-caption mycolor4">
      <?php if($i=0): ?>
  <?php endif; ?>
    <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ == 1): ?>
    <?php break; ?>
    <?php endif; ?>
    <div class="image-text">
  <a href="/topics/<?php echo e($topic->id); ?>">
    <h4 dir="auto" style="font-family: hel; text-align: center;"><?php echo e($topic->title); ?></h4>
</a>
  </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

    <div class="item">
        <?php if($i=0): ?>
      <?php endif; ?>
        <?php $__currentLoopData = $learns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i++ == 1): ?>
        <?php break; ?>
        <?php endif; ?>
        <a href="/learn">
          <img style="width: 100%; height: auto;" src="/storage/course_image/<?php echo e($learn->course_image); ?>" alt="<?php echo e($learn->course_image); ?>" data-color="firebrick" alt="Second Image" >
    </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="carousel-caption mycolor4">
          <?php if($i=0): ?>
      <?php endif; ?>
        <?php $__currentLoopData = $learns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i++ == 1): ?>
        <?php break; ?>
        <?php endif; ?>
        <div class="image-text">
      <a href="/learn">
        <h4 dir="auto" style="font-family: hel; text-align: center;"><?php echo e($learn->title); ?></h4>
    </a>
      </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>


  </div>

</div>

<style>

@media  screen and (max-width:480px){
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
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
@media  screen and (max-width: 480px) {
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
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/includes/slider.blade.php ENDPATH**/ ?>