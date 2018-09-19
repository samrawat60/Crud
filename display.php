<?php
include 'menu.html';
?>

<html>
<head>
  <title>Display Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
	<div class="col-lg-12">
		<h1 class="text-warning text-center"> Display table Data </h1><br>
		<table class="table table-striped table-hover table-bordered text-center">
			<tr class="bg-dark text-white">
				<th> Id </th>
				<th> Username </th>
				<th> Password </th>
				<th> Update </th>	
				<th> Delete </th>
			</tr>
			
		<?php
			include 'db.php';
			
			
			$q = "select * from crudtable`";
			$query = mysqli_query($con,$q);
			
			while($result = mysqli_fetch_array($query))
			{
		?>
			
			<tr>
				<td> <?php echo $result['id']; ?> </td>
				<td> <?php echo $result['username']; ?> </td>
				<td> <?php echo $result['password']; ?> </td>
				<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete</a> </button></td>
				<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $result['id']; ?>" class="text-white"> Update</a> </button></td>
			</tr>
			
		<?php
			}
		?>
		</table>	
	</div>	
	</div>
</body>
</html>