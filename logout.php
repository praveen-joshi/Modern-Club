<?php  
session_start();
session_unset();
session_destroy();  
//header("Location: view.php");
echo "<script>history.go(-1);</script>"
?>  