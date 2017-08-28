<?php include"includes/config.php";
  $query = mysql_query("DELETE FROM soding WHERE id=".$_GET['id']) ;
    echo "<script language= 'JavaScript'>alert('Task Deleted.');</script>";
    echo '<script> location.replace("list_task.php"); </script>'; 
?>
