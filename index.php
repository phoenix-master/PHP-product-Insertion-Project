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
<section class="row">
	<aside class="col-md-2">
		<table>
			<tbody>
				<tr>
					<td>Home</td>
				</tr>
				<tr>
					<td>Order</td>
				</tr>
				<tr>
					<td>Products</td>
				</tr>
				<tr>
					<td>Customers</td>
				</tr>
				<tr>
					<td>collection</td>
				</tr>
				<tr>
					<td>Inventory</td>
				</tr>
				
				<tr>
					<td>Gift Cards</td>
				</tr>
				<tr>
					<td class="sp"></td>
				</tr>
				
			</tbody>
		</table>
	</aside>
	<article class="col-md-9">
		<p style="font-size: 20px;">< Add product:</p>
		<hr>
		<article class="col-md-12">
			
			<form action="fetch.php" method="POST">
				<p class="pp">Title</p>
				<p><input type="text" name="title"></p>
				<p>category:
					<select name="grooming">
						
							<option value="shirt">Shirt</option>
							<option value="jeans">Jeans</option>
							<option value="wallet">Wallet</option>
						
					</select>
				</p>
				<p>Description</p>
				<textarea name="edittext"></textarea>
				<br>
				<div>
					<p>Upload image:</p>
					<input type="file" name="imgup">
				</div>
				<br>
				<p>Set Price:</p>
				<p>Rs:<input type="number" name="cost"></p>
				<input type="submit" name="init" value="Add">
			</form>
		
		</article>
	</article>
</section>
<script>
  CKEDITOR.replace( 'edittext' );
</script>

</body>
</html>