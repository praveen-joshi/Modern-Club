<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Peddana&family=Work+Sans:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body style="background:linear-gradient(to right,orange,yellow);">
	<div class="container from-box shadow mt-5 pt-3 bg-primary rounded ">
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<button type="button" class="btn active_button mr-5 " id="login_button" onclick="change()">Login</button>		
					<button type="button" class="btn" id="signup_button" onclick="change()">Signup</button>
				</div>
			</div>	

		</div>
		<div class="row mt-3">
			<div class="col-12">
				<div class="">
					<form id="user_login" action='#' class="active-form p-3 bg-light mb-3" method="POST" enctype="multipart/form-data">
					  <div class="form-group" >
					    <label for="login_email">Email address</label>
					    <input type="email" class="form-control" id="login_email" name="login_email" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="login_password">Password</label>
					    <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
					  </div>
					  <button type="submit" id="user_login_button" name="user_login_button" class="btn btn-primary">Submit</button>
					</form>

					<!-- signup form start -->
					<form id="user_signup" class="p-3 bg-light mb-3" style="display: none;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<div  class="form-group">
					  	<label for="name">Name</label>
					    <input type="text" class="form-control" id="organizer_signup_name" name="organizer_signup_name" placeholder="Enter name">
				  	</div>
					  <div  class="form-group">
					    <label for="organizer_signup_email">Email address</label>
					    <input type="email" class="form-control" id="organizer_signup_email" name="organizer_signup_email" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="organizer_signup_password">Password</label>
					    <input type="password" class="form-control" id="organizer_signup_password" name="organizer_signup_password" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="organizer_profile">Select profile picture</label>
					    <input type="file" class="form-control-file" id="organizer_profile" name="organizer_profile">
					  </div>
					  <button type="signup" class="btn btn-primary" id="user_signup_button" name="user_signup_button">Submit</button>
					</form>
					<!-- signup form end -->
				</div>

			</div>	
		</div>	
	</div>

	<script src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

<?php
	include("conn.php");
	//here user_login_button is name and not the id of button
	if(isset($_REQUEST['user_login_button']))
	{
		$password=$_REQUEST['login_password'];
		$email=$_REQUEST['login_email'];
		$query="select * from organizers where email='$email';";
		$res=mysqli_query($conn,$query)or die("Unable to process query execution failed...");
		$row=mysqli_fetch_row($res);
		if(password_verify($password,$row[3]))
		{
			session_start();
			$_SESSION['organizer']=$row[0];
			echo "<script> window.location='Organizer_home.php'</script>";
		}
		else
		{
			echo "<script> alert('Login Failed');</script>";
			echo "<script> window.location='organizer_login.php'</script>";
		}
	}

	if(isset($_REQUEST['user_signup_button']))
	{
		$organizer_name=$_REQUEST['organizer_signup_name'];
		$password=$_REQUEST['organizer_signup_password'];
		$password=password_hash($password, PASSWORD_DEFAULT);
		$email=$_REQUEST['organizer_signup_email'];

		//code to upload file
		$tmp_file_location=$_FILES["organizer_profile"]["tmp_name"];
		$file_name="data/organizer_profiles/".$_FILES["organizer_profile"]["name"];
		//$profile=md5($_FILES["photo"]["name"]).$_FILES["photo"]["name"];
		move_uploaded_file($tmp_file_location,$file_name) or die("failed to upload photo");


		$query="insert into organizers values(0,'$organizer_name','$email','$password','$file_name');";
		echo $query;
		$res=mysqli_query($conn,$query)or die("Unable to process query execution failed...");
		if($res)
		{
			echo "<script> window.location='organizer_login.php'</script>";
		}
		else
		{
			echo "Failed";
			echo "<script> alert('Failed');</script>";
		}
	}
?>
