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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="js/main.js"></script>

</head>

<body>

<!-- Navbar -->
 <?php include_once('templates/header.php'); ?>
 <br><br>

<div class="container">
	<div class="row">
		
		<div class="col-md-4">
			<div class="card mx-auto" style="width: 18rem;">
			  <img class="card-img-top mx-auto" style="60%;" src="images/user.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Profile Info</h5>
			  	<p class="card-text"><i class="fa fa-user">&nbsp;</i>Imon Dela Rosa</p>
			  	<p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
			  	<p class="card-text">Last Login : xxxx-xx-xx</p>
			    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
			  </div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="jumbotron" style="width:100%; height:100%;">
				<h1>Welcome Admin,</h1>
				<div class="row">
					<div class="col-sm-6">
						<iframe src="http://free.timeanddate.com/clock/i65tzamu/n1036/szw160/szh160/hoc000/hbw2/hfceee/cf100/hncccc/fdi76/mqc000/mql10/mqw4/mqd98/mhc000/mhl10/mhw4/mhd98/mmc000/mml10/mmw1/mmd98" frameborder="0" width="160" height="160"></iframe>
					</div>
					<div class="col-sm-6">
						 <div class="card">
					      <div class="card-body">
					        <h5 class="card-title">New Orders</h5>
					        <p class="card-text">Here you can make invoice and create new order</p>
					        <a href="#" class="btn btn-primary">New Orders</a>
					      </div>
					    </div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div> <!-- container -->

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Manage Categories</h5>
		        <p class="card-text">Here you can manage your categories and you can add new parent and sub categories</p>
		        <a href="#" class="btn btn-primary">Add Categories</a>
		        <a href="#" class="btn btn-primary">Manage Categories</a>
		      </div>
		    </div>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
	</div>
</div>


<script>
	$(document).ready(function(){
         
    });
</script>
</body>
</html>

 