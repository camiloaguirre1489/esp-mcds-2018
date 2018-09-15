<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modelo vista Controlador - MVC - CRUD</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style>
		body{
			font-family: 'Muli', sans-serif;
			font-weight: 400;
		}
	</style>


	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,800,900" rel="stylesheet"> 


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class = "text-center"> <i class="fa fa-address-book "></i>CRUD MVC</h1>
				<hr>
				<a href="?page=add" class="btn btn-success"><i class = "fa fa-plus"> Add User </i></a>
				<br><br>
				<table class="table table-striped table-hover table-dark">
					<thead>
						<tr>
							<th> Id </th>
							<th> FirstName </th>
							<th> LastName </th>
							<th> Email </th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datos as $user): ?>
							<tr>
								<td><?php echo $user['id'] ?></td>
								<td><?php echo $user['firstName'] ?></td>
								<td><?php echo $user['lastName'] ?></td>
								<td><?php echo $user['email'] ?></td>
								<td>
									<a href="?page=show&id=<?php echo $user['id'] ?>" class="btn btn-sm btn-primary"> <i class="fa fa-search"></i> </a>
									<a href="" class="btn btn-sm btn-info"> <i class="fa fa-pen"></i> </a>
									<a href="" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
					</table>
			</div>
		</div>
	</div>
	<script src="public/js/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"> </script>
	<script>
		$(document).ready(function(){

			<?php if (isset($_SESSION['status'])): ?>
				swal(
				'Message:', 
				"<?php echo $_SESSION['message'] ?>",  
				"<?php echo $_SESSION['status'] ?>"
				);
			<?php endif ?>
			<?php 
			unset($_SESSION['message']);
			unset($_SESSION['status']);
			?>
			
		})
	</script>
</body>
</html>