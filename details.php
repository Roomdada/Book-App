<!DOCTYPE html>
<html>
<head>
	<?php
     require 'config/functions.php';
     if (isset($_GET)) {
     	extract($_GET);
     	$id = intval($id);
     	$book= getBook($id);
     	$author = getAuthor($book['id_author']);
     }
	?>
	<title>Details de</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-6">
			<h2><?=$book['tile'] ?></h2>
	        <img style="width: 100%; height: 130px;" src="images/<?=$book['image']?>">
		</div>
		<div class="col-lg-6">
		  <p>
		  	<?=$book['description'] ?>
		  </p>	
		</div>
	</div>
	<div class="container mt-4">
		<h2>Information sur l'auteur</h2>
		<h5><?=$author['firstname'].' '.$author['lastname']?></h5>
	</div>
</div>
</body>
</html>