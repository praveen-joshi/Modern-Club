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

  <style type="text/css">
  	.event_search_bar
  	{
  		position: sticky;
  		top:100px;
  		background-color: white;
  		z-index: 8;
  		padding: 1px;
  		padding: 0px;
  		margin: 0px;
  	}
  	section{
				min-height: 100vh;
				padding-top: 100px;
			}
  </style>


</head>
<body>
	<section class="view lightnav" id='view_event_and_clubs'>
		<nav class="navbar navbar-expand-lg navbar-light shadow mb-3 mx-1 sticky">
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
		<div id="event_search_bar" class="bg-white event_search_bar shadow">
			<hr>
			<label><h2 class="	">Search :</h2></label>
			<input type="text" id="event_search" class="event_search" autocomplete="off">
			<hr>
		</div>

		<!-- here events will be added by the ajax -->
		<div class="event_box m-2" id="event_box">
			
		</div>
		
	</section>

	
	 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>		
	<script type="text/javascript" src="js/jquery.js"></script>
	 <script src="js/script.js"></script>

</body>
</html>



