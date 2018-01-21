<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Template Gallery</title>

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
			@include('partials.navbar')
			<!-- End NavBar -->
			<!-- Page Header -->
			@include('partials.pageheader')
			<!-- End Page Header -->
			<!-- Thumbnails -->
			@include('partials.thumbnails')
			<!-- End Thumbnails -->
			<!-- Pagination -->
			@include('partials.pagination')
			<!-- End Pagination -->
			
		</div>
	</div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>