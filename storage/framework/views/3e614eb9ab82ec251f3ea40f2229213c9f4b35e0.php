<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Template Custom 2</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- NavBar -->
			<?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End NavBar -->
			<!-- Page Header -->
			<?php echo $__env->make('partials.pageheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Page Header -->
			<!-- Title -->
			<?php echo $__env->make('partials.title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Title -->
			<!-- Form -->
			<?php echo $__env->make('partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Form -->
			<!-- Jumbroton -->
			<?php echo $__env->make('partials.jumbroton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Jumbroton -->
			<!-- Thumbnails -->
			<?php echo $__env->make('partials.thumbnails', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Thumbnails -->
			<!-- Pagination -->
			<?php echo $__env->make('partials.pagination', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Pagination -->
			
		</div>
	</div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>