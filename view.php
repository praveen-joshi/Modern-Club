<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Find all events and place near you</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<section class="view lightnav" id='view_event_and_clubs'>
		<nav class="navbar navbar-expand-lg navbar-light shadow mb-3 mx-1">
	        <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
	        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	          <div class="navbar-nav ml-auto">
	            <a class="nav-item nav-link active mynav-item m-2 " href="index.html">Home <span class="sr-only">(current)</span></a>
	            <a class="nav-item nav-link m-2" href="#view_event_and_clubs">View clubs/Events</a>
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
		<div class="mx-5 shadow p-3 mb-2">
			<div class="container-fluid">

				<div class="row">
					<div class="col-12">
						<div class="d-flex justify-content-between w-100 my-1">
							<h2 class="font-weight-bold">View Events</h2>
							<a class='btn btn-primary mr-3' href="all_event.php">View all</a>
						</div>
					</div>
				</div>

				<div class="row bg-light shadow">
						<?php
						include("conn.php");
						$query="select * from events;";
						$res=mysqli_query($conn,$query);
						$i=0;
						while($row=mysqli_fetch_row($res) and $i<4)
						{
							$EventID=$row[0];
							$EventName=$row[1];
							$EventDate=$row[2];
							$EventAddress=$row[3];
							$EventCity=$row[4];
							$EventState=$row[5];
							$EventCountry=$row[6];
							$Event_time=$row[7];
							$Event_photo=$row[8];
							$EventDescription=$row[9];
							$EventOrganizer=$row[10];


							echo"
							<div class='col-md-3 my-3'>
							<a class='text-dark' href='view_event.php?event={$EventID}'>
								<div class='shadow rounded bg-light w-100 h-100'>
									<div class=''>
										<img src='$Event_photo' class='w-100 p-3 limit-height'>
									</div>
									<div class='bg-white p-1'>
										<h3 class='my-1'>$EventName</h3>
										$EventDate | $EventCity | $EventState | $Event_time
									</div>
								</div>
							</a>
							</div>
							";
							$i=$i+1;

						}
						?>
						
				</div>
			</div>
		</div>

		<!-- Clubs -->
		<div class="mx-5 shadow p-3">
			<div class="container-fluid">

				<div class="row">
					<div class="col-12">
						<div class="d-flex justify-content-between w-100 my-1">
							<h2 class="font-weight-bold">Join these Clubs Now</h2>
							<a class='btn btn-primary mr-3 ' href="all_club.php">View all</a>
						</div>
					</div>
				</div>

				<div class="row bg-light shadow">
						<?php
						include("conn.php");
						$query="select * from membership_club;";
						$res=mysqli_query($conn,$query);
						$i=0;
						while($row=mysqli_fetch_row($res) and $i<4)
						{
							$ClubID=$row[0];
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
							


							echo"
							<div class='col-md-3 my-3'>
							<a class='text-dark' href='view_membership_club.php?membership_club={$ClubID}'>
								<div class='shadow rounded bg-light w-100 h-100'>
									<div class=''>
										<img src='$Club_photo' class='w-100 p-3 limit-height'>
									</div>
									<div class='bg-white p-1'>
										<h3 class='my-1'>$ClubName</h3>
										$ClubAddress | $ClubCity
									</div>
								</div>
							</a>
							</div>
							";
							$i=$i+1;

						}
						?>
						
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



