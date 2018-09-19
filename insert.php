<?php
include 'db.php';
include 'menu.html';

// we want that When user click on submit button then only the value will be inserted in the Database
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$q = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username', '$password')";
		$query = mysqli_query($con,$q);
	}
?>

<html>
<head>
  <title>Insert Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		
		<form method="post">
			<br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Insert Operation </h1>
				</div><br>
				
				<label> Username </label>
				<input type="text" name="username" class="form-control"><br>
				
				<label> Password </label>
				<input type="text" name="password" class="form-control"><br>
				
				<button type="submit" name="submit" class="btn btn-success"> Submit</button>
			</div>
		</form>
	</div>
</body>
</html>