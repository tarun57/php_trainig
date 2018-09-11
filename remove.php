<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
if(isset($_POST['submit']))
        {
		$id = $_POST['id'];	
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
$query = mysql_query("DELETE FROM `records` WHERE id 0");
 $result = mysql_query($query);
   echo "value remove";

		}
		?>

<DOCTYPE!>
<html>
<head>
<style>
h1{
	text-align:center;
	padding:20px;
	color:grey;
}
.abs{
	
		margin:20px;
		padding:20px;
	
	}
	
a:link{
		text-decoration:none;
	}

</style>
</head>
<body background = "apple.jpg">
<h1>ENTER VALUE DELETE FROM DATABASE</h1>
<form method="post">
<fieldset class="abs">
<legend><h1>REMOVE DATA</h1></legend>
ID:&emsp;&emsp;&emsp;&ensp;<input type="text" name="id" style="margin:10px;col-4" required><br>
Name:&emsp;&emsp;<input type="text" name="name" style="margin:10px;" required><br>
Address:&emsp;&nbsp;<input type="text" name="address" style="margin:10px;" required><br>
Mobile:&emsp;&ensp;<input type="text" name="mobile" style="margin:10px;" required><br>
<br>
 &emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="submit">

</fieldset>
</form>
</body>
</html>