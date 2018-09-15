<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC - CRUD (Show User)</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style>
		body{
			font-family: 'Muli', sans-serif;
			font-weight: 400;
		}
	</style>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,800,900" rel="stylesheet"> 


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class = "text-center"> <i class="fa fa-address-book "></i>CRUD MVC</h1>
				<hr>
				<h2> <i class="fa fa-search"></i> Show User</h2>
				<nav aria-label="breadcrumb">
  					<ol class="breadcrumb">
    				<li class="breadcrumb-item active"><a href="./">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Show User</li>
  					</ol>
				</nav>
				<table class="table table-striped table-dark">
					<?php foreach ($datos as $user): ?>
						<tr>
							<th> Id: </th>
							<td> <?php echo $user['id']; ?></td>
						</tr>
						<tr>
							<th> Full Name: </th>
							<td> <?php echo $user['firstName']." ".$user['lastName']; ?></td>
						</tr>
						<tr>
							<th> Email: </th>
							<td> <?php echo $user['email']; ?></td>
						</tr>
						<tr>
							<th> Phone Number: </th>
							<td> <?php echo $user['phoneNumber']; ?></td>
						</tr>
						<tr>
							<th> Address: </th>
							<td> <?php echo $user['address']; ?></td>
						</tr>

					<?php endforeach ?>
					
				</table>
				<br><br>
				
			</div>
		</div>
	</div>
	
</body>
</html>