<?php
include_once 'dbconfig.php';
if(isset($_GET['delete_id']))
 {
	 $sql_query  = "UPDATE users SET is_delete=1 WHERE user_id =".$_GET['delete_id'];
	 mysql_query($sql_query);
	 
	 echo "Delete record successfully";
	 header('Location:Display.php?msg=Delete_sucessfull');
	 
	 }
?>

  