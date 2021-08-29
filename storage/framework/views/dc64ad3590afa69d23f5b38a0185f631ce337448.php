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

    <?php echo Form::open(['action' => 'TopicController@store', 'method'=>'POST','enctype'=>'multipart/form-data']); ?>


    <div class=container style="margin-top:30px">
    <div class="panel panel-info">
      <div class="panel-heading">
      <h1>
      create a topic here
      </h1>
      </div>
      <div class="panel-body">
      <h3 style="text-transform:uppercase">

      <div class="form-group">
<?php echo e(Form::label('Subject', 'Subject')); ?>

<?php echo e(Form::text('Subject', '',['class'=>'form-control', 'placeholder'=>'Subject'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('Title', 'title')); ?>

<?php echo e(Form::text('title', '',['class'=>'form-control', 'placeholder'=>'Title'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('smalldes', 'Add Description')); ?>

<?php echo e(Form::text('smalldes', '',['class'=>'form-control', 'placeholder'=>'Add Description'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('firstname', 'Firstname')); ?>

<?php echo e(Form::text('firstname', '',['class'=>'form-control', 'placeholder'=>'Firstname'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('lastname', 'Lastname')); ?>

<?php echo e(Form::text('lastname', '',['class'=>'form-control', 'placeholder'=>'Lastname'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('Subject', 'Upload Image')); ?>

<?php echo e(Form::file('topic_image',['class'=>'form-control'])); ?>

</div>

<div class="form-group">
<?php echo e(Form::label('body', 'Details')); ?>

<?php echo e(Form::textarea('body', '',['class'=>'form-control', 'placeholder'=>'Details', 'id'=>"summary-ckeditor"])); ?>

</div>

<?php echo e(Form::submit('Publish', ['class'=>"btn btn-info"])); ?>

       </h3>
      </div>
    </div>


</div>
<?php echo Form::close(); ?>

<!-- Scripts -->
<!--<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> -->
<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
        <script>
                CKEDITOR.replace( 'summary-ckeditor' );
        </script>



<style>
                    body {
                        background-color:rgb(56, 56, 56);
                    }
                </style>
</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/topics/createtopics.blade.php ENDPATH**/ ?>