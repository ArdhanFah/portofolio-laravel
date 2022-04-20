<?php $__env->startSection('pageClass', 'my-blog'); ?>
<?php $__env->startSection('tabTitle', 'ArdhanFah - Blog'); ?>
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="/stylesheets/custom.css" rel="stylesheet" type="text/css">
    <link href="/stylesheets/grid12.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<section class="home__section home__section--cityscape section blah-blah-blah">
    <h2 class="text-header">MY BLOG</h2>
    
</section>
</body>
</html>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>