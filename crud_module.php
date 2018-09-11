<DOCTYPE html>
<html>
<head>

  <title>Bootstrap Example</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  

<title>Table
</title>
<style>
table,th,td{
	margin-top:100px;
    

	
	text-align:center;
	color:white;


padding:5px;
margin-left:140px;

}
a:hover
{
	color:red;
	text-decoration:underline;
	
}

h1{
	color:black;
	text-align:center;
	font-size:60px;
	
}
.a{
	  color: black;
	text-align:center;
	font-size:60px;
      	}
footer{
	text-align:center;
	margin-top:100px;
	color:black;
	
}
td:hover{
	background-color:grey;
}

</style>
</head>
<body style="background-color:black;">
<form  method="post">
<h1 class="a" style="color:white;"><marquee direction="right" behaviour="scroll">PIZONE</marquee></h1>
<h1 style="color:white;">Employee</h1>
<table style="width:80%;">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>Mobile</th>
	
	<th colspan="3">Action</th>
	</tr>


<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
$query = mysql_query("SELECT * FROM  records");

while($row = mysql_fetch_array($query))

{
	?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo  $row['adress'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><a href="insert.php"><span class ="glyphicon glyphicon-plus"></span></a></td>
	<td><a href="update.php?id=<?php echo $row['id'];?>"><span class ="glyphicon glyphicon-edit"></span></a></td>
	<td><a href="crud_module.php?id=<?php echo $row['id'];?>"><span class ="glyphicon glyphicon-trash"></span></a></td>
	
	</tr>

	<?php
}
?>
</table>
<?php
if(isset($_GET['id']))
        {
		$id = $_GET['id'];	
$query = mysql_query("DELETE FROM `records` WHERE id='$id'");
 $result = mysql_query($query);
   echo "value remove";
} 
		?>
</form>
<footer>&copy; Copyright 2018 HTML.am</footer>

</body>
</html>