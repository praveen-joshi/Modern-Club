<?php
	session_start();
	if(!isset($_SESSION['organizer'])){
		echo "<script>alert('something went wrong');</script>";
		echo "<script>history.go(-1);</script>";
	}

	include('conn.php');
	$query="select * from membership_club where membership_club_id={$_GET['membership_club']}";
	$res=mysqli_query($conn,$query)or die("Unable to process query execution failed...");
	$membership_club=mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  



  
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Peddana&family=Work+Sans:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">	

	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		header{
			min-height: 100px;

		}
	</style>
</head>
<body>
	<header class="lightnav">
		<nav class="navbar navbar-expand-lg navbar-light shadow mb-3 mx-1 sticky">
	        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
	        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav ml-auto">
	            <a class="nav-item nav-link active mynav-item m-2 " href="index.html">Home <span class="sr-only">(current)</span></a>
	            <a class="nav-item nav-link m-2" href="Organizer_home.php">My clubs and Events</a>
	            <a class='nav-item nav-link m-2' href='logout.php'>Logout</a>
	          </div>
	        </div>
     	</nav>
	</header>
	<section>
		<h1 class="text-center heading mt-1 pt-3"><?php echo $membership_club['name']." Registration"?></h1>
		<div class="container">
			<?php
				$query="SELECT * from users where id in (SELECT user_id from membership_club_booking where membership_club_id={$_GET['membership_club']})";
				$result=mysqli_query($conn,$query) or die("Cant Execute this request ".$query);
				if(mysqli_num_rows($result)>0)
				{
			?>
					<table border="solid" width="100%" class="text-center bg-light mt-5">
						<tr>
							<th>S.no</th>
							<th>Name</th>
							<th>Email</th>
						</tr>
			<?php
						$i=1;
						while($row=mysqli_fetch_assoc($result))
						{
							echo "
							<tr>
								<td>{$i}</td>
								<td>{$row['name']}</td>
								<td>{$row['email']}</td>
							</tr>
							";
							$i+=1;
						}
					echo"</table>";
				}
						else
						{
								echo "<h3 class='text-center'>No Registration for this event</h3>";
						}
			?>
		</div>

	</section>


	<script src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>