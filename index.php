<!DOCTYPE html>
<html>
<head>
	<title>Chic Librairie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand ml-4" href="#">Chic Librairie</a>
   
   
  </div>
</nav>
<?php
require 'config/functions.php';

$books = getAllBook();
?>
<div class="container mt-4">
	<h2 class="text-center">Nos Livres du jours</h2>
	<div class="row mt-3 container">
	 <?php foreach ($books as $book) : ?>
		<div class="card col-lg-4">
			<div class="card" style="width: 18rem;">
			  <img height="300" src="images/<?=$book['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><?= $book['tile']; ?></h5>
			    <a href="<i class="mdi mdi-details:"></i>.php?id=<?=$book['id']?>" class="btn btn-primary">Voir details</a>
			  </div>
			</div>
		</div>
	<?php endforeach;  ?>
	</div>
</div>





</body>
</html>