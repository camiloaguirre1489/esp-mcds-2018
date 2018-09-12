<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC - CRUD (Add User)</title>

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
				<h2> <i class="fa fa-plus"></i> Add User</h2>
				<nav aria-label="breadcrumb">
  					<ol class="breadcrumb">
    				<li class="breadcrumb-item active"><a href="./">Home</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Add User</li>
  					</ol>
				</nav>
				<form action="" method="post">

					<div class="form-group">
						<label for=""><strong>FirstName:</strong></label>
						<input type="text" class="form-control" name="firstName" placeholder="FirstName" required>

						<label for=""><strong>LastName:</strong></label>
						<input type="text" class="form-control" name="lastName" placeholder="LastName" required>

						<label for=""><strong>Email:</strong></label>
						<input type="email" class="form-control" name="email" placeholder="Email" required>

						<label for=""><strong>PhoneNumber:</strong></label>
						<input type="number" class="form-control" name="phoneNumber" placeholder="PhoneNumber" required>

						<label for=""><strong>Address:</strong></label>
						<input type="text" class="form-control" name="address" placeholder="Address" required>
						<br>
						<br>
						<button type="submit" class="btn btn-warning btn-lg" ><i class="fa fa-save"></i>&nbsp; Save</button>
						&nbsp; &nbsp;
						<button type="reset" class="btn btn-dark btn-lg" ><i class="fa fa-broom"></i>&nbsp; Reset</button>
					</div>
				</form>
				<br><br>
				
			</div>
		</div>
	</div>
	
</body>
</html>