
<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <title>Document</title>
</head>
<body>
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo Form::open(['action' => ['CourseController@update', $learn->id], 'method'=>'POST','enctype'=>'multipart/form-data']); ?>


    <div class=container style="margin-top:30px">
    <div class="panel panel-info">
      <div class="panel-heading">
      <h1>
      Make a changes
      </h1>
      </div>
      <div class="panel-body">
      <h3 style="text-transform:uppercase">

      <div class="form-group">
        <?php echo e(Form::label('Subject', 'Subject')); ?>

        <?php echo e(Form::text('Subject',$learn->Subject,['class'=>'form-control', 'placeholder'=>'Subject'])); ?>

        </div>

        <div class="form-group">
        <?php echo e(Form::label('smalldes', 'Add Description')); ?>

        <?php echo e(Form::text('smalldes',$learn->smalldes,['class'=>'form-control', 'placeholder'=>'Add Description'])); ?>

        </div>

        <div class="form-group">
        <?php echo e(Form::label('firstname', 'Firstname')); ?>

        <?php echo e(Form::text('firstname',$learn->firstname,['class'=>'form-control', 'placeholder'=>'Firstname'])); ?>

        </div>

        <div class="form-group">
        <?php echo e(Form::label('lastname', 'Lastname')); ?>

        <?php echo e(Form::text('lastname',$learn->lastname,['class'=>'form-control', 'placeholder'=>'Lastname'])); ?>

        </div>

        <div class="form-group">
        <?php echo e(Form::label('body', 'Details')); ?>

        <?php echo e(Form::textarea('body',$learn->body,['class'=>'form-control', 'placeholder'=>'Details', 'id'=>"editor"])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('Subject', 'Upload Image')); ?>

            <?php echo e(Form::file('course_image',['class'=>'form-control'])); ?>

            </div>

        <div class="form-group">
        <?php echo e(Form::label('link', 'Add Course Link')); ?>

        <?php echo e(Form::text('link',$learn->link,['class'=>'form-control', 'placeholder'=>'Add Course Link'])); ?>

        </div>
        </div>

<?php echo e(Form::hidden('_method', 'PUT')); ?>

<?php echo e(Form::submit('Update', ['class'=>"btn btn-info"])); ?>

<?php echo e(Form::hidden('_method', 'DELETE')); ?>

<?php echo e(Form::submit('Delete', ['class'=>"btn btn-danger"])); ?>

       </h3>
      </div>
    </div>


</div>
<?php echo Form::close(); ?>

<!-- Scripts -->
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
        <script>
                CKEDITOR.replace( 'summary-ckeditor' );
        </script>
</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/learn/edit.blade.php ENDPATH**/ ?>