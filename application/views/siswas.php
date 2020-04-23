<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contoh CRUD dengan GROCERY CRUD</title>
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
  		<div class="col-md-12 justify-content-center mt-3 pt-4 ">
  			
  			<h1><center class="h1tebal">-- 	Contoh CRUD dengan GROCERY CRUD --</center></h1>
  		</div>

  	</div>

  	<dir class="row">
  		<div class="col-md-8">
  			<h3>Siswa-siswa yang akan mengikuti tes masuk perguruan tinggi negeri.  </h3>
 			 <p>Semoga bisa lulus dengan nilai yang memuaskan.</p>
  		</div>
  	</dir>
  	<div class="">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</div>

<footer class="mb-5 pb-4"><br>
	<center>@GroceryCRUD - 2020 </center>

</footer>

</body>
</html>