<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="css/index.css">
  
</head>
<body>
	<header class="row">
		<article class="col-md-12">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/admin.png" alt="logo" style="width:40px;">
  </a>
  <p style="color:white;margin-top:10px;">Admin</p>

  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
      <a class="nav-link" href="#"><input type="button" class="btn btn-danger" value="Logout"></a>
    </li>
  </ul>


</nav>
</article>
</header>
<?php

if(isset($_POST['init'])){
$con=mysqli_connect("localhost","root","","products");

	$t=$_POST['title'];
	$g=$_POST['grooming'];
	$d=$_POST['edittext'];
	$i=$_POST['imgup'];
	$p=$_POST['cost'];
$ins="INSEERT INTO items SET Title='$t', Category='$g', Address='$d',Cost='$p'";
$con->query($ins);
}
?>
<div class="container">
  
  <p><?php echo $t; ?></p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php  echo $i;?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $g; ?></h4>
      <p class="card-text"><?php echo $d; ?></p>
       <p class="card-text">RS:<?php echo $p; ?></p>

      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
  </div>
	</body>
</html>