<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Tampil siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url("assets/style.css"); ?>">
  <?php 
	foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
</head>
<body>

	<div class="container">
  	<div class="row">
  		<div class="col-md-12 justify-content-center ">
  			
  			<h1><center class="h1tebal">Nama Siswa</center></h1>
  		</div>

  	</div>

  	<dir class="row">
  		<div class="col-md-8">
  			<h3>Nama Siswa</h3>
 			 <p>This is some text.</p>
  		</div>
  	</dir>
  	<div class="">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</div>


</body>
</html>