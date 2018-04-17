<!DOCTYPE html>

<html lang=“en”>

<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Inventory Management System</title>

	<meta name=“description” content=“Bootstrap”>

	<meta name="author" content="Imon Dela Rosa">
 
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	 <link rel="stylesheet" href="includes/style.css">
    <script src="js/main.js"></script>

</head>

<body>
<div class="overlay">
  <div class="loader"></div>
</div>
<!-- Navbar -->
 <?php include_once('templates/header.php'); ?>
 <br><br>

<div class="container">


<div class="card mx-auto" style="width:30em;margin:0 auto;">
	<div class="card-header">Register</div>
	<div class="card-body">
		<form action="" id="register_form" onsubmit="return false" autocomplete="off">
			<div class="form-group">
				<label for="username">Full Name</label>
				<input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
				<small id="u_error" class="form-text text-muted"> </small>
			</div>
			<div class="form-group">
				<label for="email">Email Address</label>
				<input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
				<small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password1" class="form-control" id="password1" placeholder="Enter Password">
				<small id="p1_error" class="form-text text-muted"> </small>
			</div>
			<div class="form-group">
				<label for="password">Re-Enter Password</label>
				<input type="password" name="password2" class="form-control" id="password2" placeholder="Enter Password">
				<small id="p2_error" class="form-text text-muted"> </small>
			</div>
			<div class="form-group">
				<label for="usertype">UserType</label>
				<select name="usertype" class="form-control" id="usertype">
					<option value="">Choose User Type</option>
					<option value="Admin">Admin</option>
					<option value="Other">Other</option>
				</select>
				<small id="t_error" class="form-text text-muted"> </small>
			</div>
			<button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
			<span><a href="index.php">Login</a></span>
		</form>
	</div> <!-- card-body -->
	<div class="card-footer text-muted">
		<!-- <a href="#">forgotten password</a> -->
	</div> <!-- card footer -->
	
</div> <!-- card -->

    
</div> <!-- container -->


<script>
	$(document).ready(function(){
         
    });
</script>
</body>
</html>

 