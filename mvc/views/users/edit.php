<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> CRUD MVC (Edit User) </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
	<style>
		body {
			font-family: 'Muli', sans-serif;
			font-weight: 200;
		}
	</style>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center"> <i class="fa fa-users"></i> CRUD MVC</h1>
				<hr>
                <h2> <i class="fa fa-plus"></i> Edit User</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
                <?php foreach($datos as $user): ?>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <div class="form-group">
                        <label for=""><strong>FirstName:</strong></label>
                        <input type="text" class="form-control" name="firstName" 
                               placeholder="FirstName" value="<?php echo $user['firstName']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>LastName:</strong></label>
                        <input type="text" class="form-control" name="lastName" 
                               placeholder="lastName" value="<?php echo $user['lastName']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Email:</strong></label>
                        <input type="email" class="form-control" name="email" 
                               placeholder="Email" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>PhoneNumber:</strong></label>
                        <input type="number" class="form-control" name="phoneNumber" 
                               placeholder="PhoneNumber" value="<?php echo $user['phoneNumber']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Address:</strong></label>
                        <input type="text" class="form-control" name="address" 
                               placeholder="Address" value="<?php echo $user['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg" type="submit"> 
                            <i class="fa fa-save"></i> Edit
                        </button>
                        <button class="btn btn-dark btn-lg" type="reset"> 
                            <i class="fa fa-broom"></i> Reset
                        </button>
                    </div>
                </form>
                <?php endforeach ?>
			</div>
		</div>
	</div>	
</body>
</html> 