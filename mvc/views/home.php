<!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title> CRUD MVC </title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
 	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
 	<style>
 		body {
 			font-family: 'Muli', sans-serif;
 			font-weight: 200;
 		}
 	</style>
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-8 offset-md-2">
 				<h1 class="text-center"> <i class="fa fa-users"></i> CRUD MVC</h1>
 				<hr>
 				<a href="?page=add" class="btn btn-success"><i class="fa fa-plus"> Add User </i></a>
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
 							<td><?php echo $user['id']; ?></td>
 							<td><?php echo $user['firstName']; ?></td>
							<td><?php echo $user['lastName']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td>	
								<a href="?page=show&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-info">   <i class="fa fa-search"></i> </a>
								
								<a href="?page=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-info"> <i class="fa fa-pen"></i> </a>
								<a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $user['id']; ?>"> <i class="fa fa-trash"></i> </a>
							</td>
						</tr>
						<?php endforeach ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>
 	<script src="public/js/jquery-3.3.1.min.js"></script>
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.btn-delete').click(function(event) {
 				$id = $(this).attr('data-id');
 				swal({
				  title: 'Are you sure ?',
				  text: 'You really want to delete this user ?',
				  type: 'warning',
				  showCancelButton: true,
				  cancelButtonColor: '#d33'
				}).then((result) => {
				  if (result.value) {
					window.location.replace('?page=delete&id='+$id);
				  }
				});
			});
 			<?php if (isset($_SESSION['status'])): ?>
				swal(
 					'Message:',
 					'<?php echo $_SESSION['message']; ?>',
 					'<?php echo $_SESSION['status']; ?>'
 				);
 			<?php endif ?>
 			<?php 
				unset($_SESSION['message']);
				unset($_SESSION['status']);
			?>
 			
		});
	</script>	
 </body>
 </html>