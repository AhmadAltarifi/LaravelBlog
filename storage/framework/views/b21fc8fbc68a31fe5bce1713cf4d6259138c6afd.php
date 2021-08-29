<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
        <script>
                CKEDITOR.replace( 'summary-ckeditor' );
        </script>

    </head>
    <body>    

            <?php echo $__env->yieldContent('content'); ?>
            
                    
    </body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\blog\resources\views/layout/app.blade.php ENDPATH**/ ?>