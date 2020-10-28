<?php
session_start();
include("conn.php");
if(isset($_GET['event']))
{
	if(isset($_SESSION['user']))
	{	
		$query="insert into event_booking values({$_GET['event']},{$_SESSION['user']});";
		if($res=mysqli_query($conn,$query))
		{
			echo "<script> alert('Registerd For The Event Successfully');</script> ";	
		}
		else{
			echo "<script> alert('Some Problem Occured in DataBase... or You Might have Already Registerd');</script> ";	
		}
		echo "<script>history.go(-1);</script> ";
	}
	else
	{
		echo "<script>window.location='user_login.php';</script> ";
	}
}
else
{
	echo "<script> alert('Some Problem Occured or Event no Longer exist');</script> ";
}

?>