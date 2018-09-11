<?php
include_once 'dbconfig.php';
      if(isset($_POST['btn_save']))
        {
	   $Fn = $_POST['Fname'];
	   $Ln = $_POST['Lname'];
	   $City = $_POST['City_Name'];
       $Sq = "INSERT INTO users(first_name,last_name,user_city) VALUES('$Fn','$Ln','$City')";
       mysql_query($Sq); 
       header('Location:index.php');	   
        }
?>
<html>
<head>
<meta>
<legend>
<h1>Enter Data for DataBase</h1>
<title>Crud Operation on php application</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS\Style.css" type="text/css" />
</head>
<body background="Home page.jpg">
<form method = "post">
<table align = "center" >
<tr>
<td>First Name:<input type = "text" name = "Fname" placeholder = "First Name" required /></td>
</tr>
<tr>
<td>Last Name:<input type = "text" name = "Lname" placeholder = "Last Name" required /></td>
</tr>
<tr>
<td>City Name:<input type = "text" name = "City_Name" placeholder = "City Name" required /></td>
</tr>
<tr>
<td><button type = "submit" name = "btn_save"><strong>Save</strong></button></td>
<a href ="index.php">Home</a>
</tr>
</legend>
</table>
</form>
</body>
</html>