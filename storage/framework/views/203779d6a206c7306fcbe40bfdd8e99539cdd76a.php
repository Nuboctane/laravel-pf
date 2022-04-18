<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>

<?php $__env->startSection('title', 'Contact'); ?>
<?php $__env->startSection('content'); ?>
   <h1>Contact form</h1>
   <div id="contact">
       <form action="/contact/send" method="post">
           <?php echo csrf_field(); ?>
           <input type="text" name="first_name" id="first_name" placeholder="first name">
           <br>
           <input type="submit" value="submit">
       </form>
   </div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/contact.blade.php ENDPATH**/ ?>