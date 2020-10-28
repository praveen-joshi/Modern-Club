<?php
$search_value =$_POST["search_text"];
include("conn.php");
$query="SELECT * from events where name LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $query) or die("SQL Query Failed.".$query);
$output="";
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {

    $output.="<a href='view_event.php?event={$row['event_id']}'>
                <div class='row m-2 p-2 bg-light shadow'>
                  <div class='col-md-4 m-auto'>
                    <img src='{$row['image']}' style='max-height:250px;'>
                  </div>
                  <div class='col-md-8 text-left'>
                    <hr><h1 class='text-dark'>{$row['name']}</h1><hr>
                    <p class='text-muted '>{$row['city']}</p>
                    <p class='text-muted '>{$row['state']}</p>
                    <p class='text-muted '>{$row['date']}</p>
                                      
                  </div>
                </div>
              </a>
              ";
  }
}
else{
  $output="no record";
}


echo $output;
?>