<?php
	session_start();
	$membership_club_id=$_GET['membership_club'];
	include("conn.php");
	$query="select * from membership_club where membership_club_id={$membership_club_id};";
	$res=mysqli_query($conn,$query);
	if($row=mysqli_fetch_row($res))
	{
		$ClubName=$row[1];
		$ClubAddress=$row[2];
		$ClubCity=$row[3];
		$ClubState=$row[4];
		$ClubCountry=$row[5];
		$Club_photo=$row[6];
		$ClubDescription=$row[7];
		$ClubOrganizer=$row[8];
		$ClubFees=$row[9];
		$ClubFeesDuration=$row[10];


	}
	else
	{
		echo "<script type='text/javascript'> alert('something Went wrong');window.location='view.php';</script>";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Find all events and place near you</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Peddana&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">	

	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	
	<section class="lightnav">
		<nav class="navbar navbar-expand-lg navbar-light shadow mb-3 mx-1">
	        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
	        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav ml-auto">
	            <a class="nav-item nav-link active mynav-item m-2 " href="index.html">Home <span class="sr-only">(current)</span></a>
	            <a class="nav-item nav-link m-2" href="view.php">View clubs/Events</a>
	            <?php
		            if(isset($_SESSION['user']))
		            {
		            	echo "<a class='nav-item nav-link m-2' href='logout.php'>Logout</a>";
		            }
		            else
		            {
		            	echo "<a class='nav-item nav-link m-2' href='user_login.php'>Login/signup</a>";
		            }
	            ?>
	          </div>
	        </div>
      </nav>
		<div class="p-3">
			<div class="container-fluid shadow p-3 ">
				<div class="row">
					<div class="col-12">
						<h1 class="text-center"><?php echo $ClubName ; ?></h1>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3 d-flex justify-content-center">
						<img src="<?php echo $Club_photo ; ?>" class='my-3' style='max-height: 200px; width: auto;'>
					</div>
					<div class="col-sm-9">
						<div class="row mb-3">
							<div class="col-12">
								<h3><?php echo 'Location: ' ; ?></h3>
								<?php echo $ClubAddress ;echo ',';?>
								<?php echo $ClubCity ;echo ','; ?>
								<?php echo $ClubState ;echo ','; ?>
								<?php echo $ClubCountry; ?>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12">
								<h3><?php echo 'Fees:' ; ?></h3>
								<?php echo ($ClubFees)?$ClubFees:'Free';?>
							</div>
						</div>	
						<div class="row">
							<div class="col-12">
								<h3><?php echo 'Time Duration:' ; ?></h3>
								<?php echo $ClubFeesDuration,' days';?>
							</div>
						</div>		
					</div>
				</div>

				<div class="row my-3">
					<div class="col-12">
						<hr>
						<?php echo $ClubDescription ; ?>
					</div>
				</div>
				


				<div class="row my-3">
					<div class="col-12 text-center">
						<?php
							// if user is already registered Dont show him register button
							$IsRegistered=False;
							if(isset($_SESSION['user']))
							{
								$query="Select * from membership_club_booking where user_id={$_SESSION['user']} and membership_club_id={$membership_club_id};";
	
								include('conn.php');
								$res=mysqli_query($conn,$query);
								if(mysqli_num_rows($res)!=0)
								{
									$IsRegistered=True;
								}

							}

							if($IsRegistered)
							{
								?>
								<a type="button" class="btn btn-primary">Thanks for Registeration</a>
								<?php
							}
							else
							{
								?>
								<a  href="add_membership_club.php?membership_club_id=<?php echo $membership_club_id; ?>" type="button" class="btn btn-primary">Register</a>
								<?php
							}
						?>
						
					</div>
				</div>





			</div>
		</div>
	</section>

	<script src="js/script.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>



