<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
      if(isset($_POST['submit']))
        {
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
	  $query = "INSERT INTO `records`(`name`, `adress`, `mobile`) VALUES ('$name','$address','$mobile')";
    $result = mysql_query($query);
   echo "value insert";
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
<div class="container">
<form method="post" >
<h1 style="background-color:solid-grey;">INSERT DATA INTO DATABASE</h1>
<div class="form-group inverse">
      <label for="Name" style="color:white;font-size:20px;">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group" style="color:white;font-size:20px;">
      <label for="Address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="form-group" style="color:white;font-size:20px;">
      <label for="Mobile">Mobile:</label>
	  <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
   <a href="http://localhost/training/web2.php"><button class="btn btn-default" name="cancel">GO BACK</button></a>
</div>
</body>
</html>