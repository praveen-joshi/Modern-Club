<?php
include("conn.php");
$query="SELECT * from membership_club";
$result = mysqli_query($conn, $query) or die("SQL Query Failed.".$query);
$output="";
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {

    $output.="<a href='view_membership_club.php?membership_club={$row['membership_club_id']}'>
                <div class='row m-2 p-2 bg-light shadow'>
                  <div class='col-md-4 mb-2'>
                    <img src='{$row['image']}' style='max-height:250px;'>
              
                  </div>
                  <div class='col-md-8 text-left text-small '>
                    <h1 class='text-dark'>{$row['name']}</h1>
                    <p class='text-dark'>{$row['city']}</p>
                    <p class='text-dark'>{$row['state']}</p>
                    <p class='text-dark'>Fees:{$row['fees']}</p>
                                      
                  </div>
                </div>
              </a>
              ";
  }
}
else{
  $output="No Events are currently there";
}


echo $output;
?>