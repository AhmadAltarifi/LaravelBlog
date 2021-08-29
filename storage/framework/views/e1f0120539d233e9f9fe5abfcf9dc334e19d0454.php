<?php if(count($errors)>0): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oops Something Wrong!</strong> <?php echo e($error); ?>

</div>




<?php echo e($error); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


    <?php if(session('success')): ?>

    <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Congrats! is done !</strong> <?php echo e(session('success')); ?>

</div>




    <?php endif; ?>

    <?php if(session('error')): ?>

    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oops Something Wrong!</strong> <?php echo e(session('error')); ?>

</div>



    

    <?php endif; ?><?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/includes/messages.blade.php ENDPATH**/ ?>