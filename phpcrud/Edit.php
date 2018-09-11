<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
  $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
  $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn_update']))
 {
	 $first_name = $_POST['Fname'];
	 $last_name  = $_POST['Lname'];
	 $user_city  = $_POST['City_Name'];
     $sql_query  = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$user_city' WHERE user_id =".$_GET['edit_id'];
     
	 mysql_query($sql_query);
	
	 echo "Updated successfully";
	 header('Location:Display.php');
 }
?>
<html>
<head>
<link rel="stylesheet" href="CSS\Style.css" type="text/css" />
</head>
<body background="Home page.jpg">
<form method = "post">
<table align = "center" >
<h2><?php echo "User ID : " . $_GET['edit_id'];?></h2>
<h1>User Edit View</h1>
<tr>
<td>First Name:</td>
</tr>
<tr>
<td>Last Name:<input type = "text" name = "Lname" placeholder = "Last Name" value="<?php echo $fetched_row['last_name'];?>" required />
  <input type = "text" name = "City_Name" placeholder = "City Name" value="<?php echo $fetched_row['user_city'];?>" required /></td>
</tr>
<tr>
<td>City Name:</td>
</tr>
<tr>
<td>
<button type = "submit" name = "btn_update"><strong>Update</strong></button>
<input type = "text" name = "Fname" placeholder = "First Name" value="<?php echo $fetched_row['first_name'];?>" required />
<button type="reset"><strong>Reset</strong></button>
</td>
</tr>
</form>
</body>
</html>