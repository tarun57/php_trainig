<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("pizone2");
 if(!$connection){
    die("Database connection failed");
    }
if(isset($_POST['sumbit']))
        {
	 $name = $_POST['name'];
	    $password = $_POST['password'];
	  $query = ("INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')");
    $result = mysql_query($query);
   echo "value insert";
 		}
		?>
<DOCTYPE!>
<html>
<head>
<style>
.h{ text-align:center!important;
	padding-right:50%;
	padding-left:30%;
	background-color:;
	}
	 </style>
 </head>
<body>
<form method="post">
 <h1 class="h">login<h2>
    <input   type="name" class="form-control" id="name"  placeholder="Enter name" name="name"   required autofocus>
<input type="password" class="form-control" id="password" placeholder="password" name="password"    required >
 <input type="submit" name="sumbit" >
</form>
</body>
</html>