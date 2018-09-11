<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
$id =$_GET['id'];
if(isset($_POST['update']))
        {
			
	   $id = $_GET['id'];
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
$query = mysql_query("UPDATE `records` SET `name`='$name',`adress`='$address',`mobile`='$mobile' WHERE id ='$id'");
if($query)
{                          
echo "value update";
} else 
{ echo "value not update";
}

}
?>

<DOCTYPE!>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

h1{
	padding:20px;
	text-align:center;
	color:white;
	}
.ab
	{
		margin:20px;
		padding:20px;
	
	}
	a:link{
		text-decoration:none;
	}
</style>
</head> 
<body style="background-color:black;">
<h1 style="font-size:50px;">ENTER VALUE</h1>
<div class="container">
<form method="post">
<div class="form-group inverse">
      <label for="Name" style="color:white;font-size:20px;">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div><br>
    <div class="form-group" style="color:white;font-size:20px;">
      <label for="Address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div><br>
    <div class="form-group" style="color:white;font-size:20px;">
      <label for="Mobile">Mobile:</label>
	  <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div><br>
  <button type="submit" class="btn btn-default" name="update">update</button>
	
  </form>
  <a href="http://localhost/training/web2.php"><button class="btn btn-default" name="cancel">GO BACK</button></a>
</div>

</form>
</body>
</html>