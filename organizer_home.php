<?php
	session_start();
	if(!isset($_SESSION['organizer'])){
		echo "<script>alert('something went wrong');</script>";
		echo "<script>history.go(-1);</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Peddana&family=Work+Sans:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
	<style type="text/css">
		section{
			min-height: 100px;
			padding-top: 100px;
		}
	</style>
</head>
<body>


	<section class="vh-100 lightnav bg-light" style="background:linear-gradient(rgba(55,125,55,0.2),rgba(255,255,255,0.1)),url('images/bg2.jpg') top left / cover no-repeat ;">
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
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-md-6 m-auto">
					<div class="d-flex flex-column">
						<!------------------------------ ADD Event button------------- -->
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning font-weight-bold m-3 p-3 " data-toggle="modal" data-target="#EventModal">
						  Add New Event
						</button>

						<!-- Modal -->
						<div class="modal fade" id="EventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h2 class="modal-title" id="exampleModalLabel">ADD Event Details</h2>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

						      	<div class="container mt-3 w-100 justify-content-center">
								<div class="row ">
									<div class="col-12 px-5">
										<form class="bg-light shadow p-2" id="add_event" action="#" name="add_event" method="POST" enctype="multipart/form-data">
										  <div class="form-group">
										    <label for="EventName">Event Name</label>
										    <input type="text" class="form-control" id="EventName" name="EventName" placeholder="Enter Event Name">
										  </div>

										  <div class="form-group">
										    <label for="EventDate">Event Date</label>
										    <input type="date" class="form-control" id="EventDate" name="EventDate" placeholder="Enter Event Date">
										  </div>
										  <div class="form-group">
										    <label for="EventAddress">Event Address</label>
										    <input type="text" class="form-control" id="EventAddress" name="EventAddress" placeholder="Enter Event Address">
										  </div>
										  <div class="form-group">
										    <label for="EventCity">Event City</label>
										    <input type="text" class="form-control" id="EventCity" name="EventCity" placeholder="Enter Event City">
										  </div>

										  <div class="form-group">
										    <label for="EventState">Event State</label>
										    <input type="text" class="form-control" id="EventState" name="EventState" placeholder="Enter Event State">
										  </div>

										  <div class="form-group">
										    <label for="EventCountry">Event Country</label>
										    <input type="text" class="form-control" id="EventCountry" name="EventCountry" placeholder="Enter Event Country">
										  </div>

										  <div class="form-group">
										    <label for="Event_time">Event time</label>
										    <input type="text" class="form-control" id="Event_time" name="Event_time" placeholder="Enter Event time">
										  </div>

										  <div class="form-group">
										    <label for="Event_photo">Select profile picture</label>
										    <input type="file" class="form-control-file" id="Event_photo" name="Event_photo">
										  </div>

										  <div class="form-group">
										    <label for="EventDescription">Event Description </label>
										    <textarea class="form-control" id="EventDescription" name="EventDescription" rows="5"></textarea>
										  </div>
										
									</div>	
								</div>
							</div>
							
						        
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" name="AddEventButton" id="AddEventButton" onclick="hi()" class="btn btn-primary">Add Events</button>
						    	</form>
						      </div>
						    </div>
						  </div>
						</div>




						<!-- ------------------------ADD club ---------------------------------->
						<button type="button"  class="btn btn-warning font-weight-bold m-3 p-3 " data-toggle="modal" data-target="#ClubModal">
						  Add New Club
						</button>

						<div class="modal" tabindex="-1" role="dialog" id="ClubModal">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h2 class="modal-title">ADD Club Details</h2>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<div class="container mt-3 w-100 justify-content-center">
								<div class="row ">
									<div class="col-12 px-5">
										<form class="bg-light shadow p-2" id="add_club" action="#" name="add_club" method="POST" enctype="multipart/form-data">
										  <div class="form-group">
										    <label for="ClubName">Club Name</label>
										    <input type="text" class="form-control" id="ClubName" name="ClubName" placeholder="Enter Club Name">
										  </div>

										  <div class="form-group">
										    <label for="ClubAddress">Club Address</label>
										    <input type="text" class="form-control" id="ClubAddress" name="ClubAddress" placeholder="Enter Club Address">
										  </div>
										  <div class="form-group">
										    <label for="ClubCity">Club City</label>
										    <input type="text" class="form-control" id="ClubCity" name="ClubCity" placeholder="Enter Club City">
										  </div>

										  <div class="form-group">
										    <label for="ClubState">Club State</label>
										    <input type="text" class="form-control" id="ClubState" name="ClubState" placeholder="Enter Club State">
										  </div>

										  <div class="form-group">
										    <label for="ClubCountry">Club Country</label>
										    <input type="text" class="form-control" id="ClubCountry" name="ClubCountry" placeholder="Enter Club Country">
										  </div>

										  <div class="form-group">
										    <label for="ClubPhoto">Select Your Logo</label>
										    <input type="file" class="form-control-file" id="ClubPhoto" name="ClubPhoto">
										  </div>

										  <div class="form-group">
										    <label for="ClubFees">Enter fees you would take or enter 0 if not </label>
										    <input type="text" class="form-control" id="ClubFees" name="ClubFees">
										  </div>


										  <div class="form-group">
										    <label for="ClubCountry">Enter the time duration of fees in days(30days for monthly fees)</label>
										    <input type="text" class="form-control" id="FeesDuration" name="FeesDuration" placeholder="Enter time in Days">
										  </div>

										  <div class="form-group">
										    <label for="EventDescription">Club Description </label>
										    <textarea class="form-control" id="ClubDescription" name="ClubDescription" rows="5"></textarea>
										  </div>
										  <!-- we cant end form here because form submit button is below as it should be according to bootstap modal -->
										<!-- </form> -->
									</div>	
								</div>
							</div>
						        
						      </div>
						      <div class="modal-footer">
						        <button type="submit" name="AddClubButton" id="AddClubButton" class="btn btn-primary">Add Club</button>
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						    </form>
						      </div>
						    </div>
						  </div>
						</div>



						<a href="organizer_clubs_view.php"  class="btn btn-warning font-weight-bold m-3 p-3 ">View Clubs</a>
						<a href="organizer_events_view.php"  class="btn btn-warning font-weight-bold m-3 p-3 ">View Events</a>


						
					</div>
				</div>
				<div class="col-md-6 m-auto font-weight-bold ">
					<h2>Welcome,</h2> 
					<h3>You can View all Registration and Add New Events and clubs from here</h3>
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

<?php
	include("conn.php");
	//here $_REQUEST is name and not the id of button
	if(isset($_REQUEST['AddEventButton']))
	{
		
		$EventName=$_REQUEST['EventName'];
		$EventDate=$_REQUEST['EventDate'];
		$EventAddress=$_REQUEST['EventAddress'];
		$EventCity=$_REQUEST['EventCity'];
		$EventState=$_REQUEST['EventState'];
		$EventCountry=$_REQUEST['EventCountry'];
		$Event_time=$_REQUEST['Event_time'];
		$EventDescription=$_REQUEST['EventDescription'];
		$EventOrganizer=$_SESSION['organizer'];

		//code to upload file
		$tmp_file_location=$_FILES["Event_photo"]["tmp_name"];
		$file_name="data/Event_photos/".$_FILES["Event_photo"]["name"];
		//$profile=md5($_FILES["photo"]["name"]).$_FILES["photo"]["name"];
		move_uploaded_file($tmp_file_location,$file_name) or die("failed to upload photo");


		$query="insert into events values(0,'$EventName','$EventDate','$EventAddress','$EventCity','$EventState','$EventCountry','$Event_time','$file_name','$EventDescription',$EventOrganizer);";
		$res=mysqli_query($conn,$query)or die("Unable to process query execution failed...");
		if($res)
		{
			echo "<script> alert('New Event Added Successfully');</script>";
		}
		else
		{
			echo "<script> alert('Failed');</script>";
		}
	}

	if(isset($_REQUEST['AddClubButton']))
	{
		$ClubName=$_REQUEST['ClubName'];
		$ClubAddress=$_REQUEST['ClubAddress'];
		$ClubCity=$_REQUEST['ClubCity'];
		$ClubState=$_REQUEST['ClubState'];
		$ClubCountry=$_REQUEST['ClubCountry'];
		$ClubDescription=$_REQUEST['ClubDescription'];
		$ClubOrganizer=$_SESSION['organizer'];
		$ClubFees=$_REQUEST['ClubFees'];
		$FeesDuration=$_REQUEST['FeesDuration'];

		//code to upload file
		$tmp_file_location=$_FILES["ClubPhoto"]["tmp_name"];
		$file_name="data/club_photos/".$_FILES["ClubPhoto"]["name"];
		//$profile=md5($_FILES["photo"]["name"]).$_FILES["photo"]["name"];
		move_uploaded_file($tmp_file_location,$file_name) or die("failed to upload photo");


		$query="insert into membership_club values(0,'$ClubName','$ClubAddress','$ClubCity','$ClubState','$ClubCountry','$file_name','$ClubDescription',$ClubOrganizer,$ClubFees,$FeesDuration);";
		$res=mysqli_query($conn,$query)or die("Unable to process query execution failed...");
		if($res)
		{
			echo "<script> alert('New Club Added Successfully');</script>";
		}
		else
		{
			echo "<script> alert('Failed to Add Club');</script>";
			echo $query;
		}
	}
?>
