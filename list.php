<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:list.php');
		exit;
	}
	
?>
<?php include('header.php')?>
<DOCTYPE html>
<html>
<head>

  <title>Bootstrap Example</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  

<title>Table
</title>
<style>
table,th,td{
	margin-top:50px;
    border:1px solid white;

	
	text-align:center;
	color:white;


padding:px;


}
a:hover
{
	color:red;
	text-decoration:underline;
	
}
th{
	padding:30px;
}

td{
	padding:20px;
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


<body style="background-color:black;">
<form  method="post">
<h1 class="a" style="color:white;">PIZONE SOLUSTION</h1>
<h1 style="color:white;">Online Quiz</h1>
<table style="width:100%;">
<tr>
	<th>ID</th>
	<th>Question</th>
	<th>Option</th>
	<th>Option</th>
	<th>Option</th>
	<th>Option</th>
	<th>Correct</th>

	
	<th colspan="3">Action</th>
	</tr>


<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");

$query = mysql_query("SELECT * FROM `quiz` ");

while($row = mysql_fetch_array($query))

{
	?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['question'];?></td>
	<td><?php echo  $row['a1'];?></td>
	<td><?php echo $row['a2'];?></td>
	<td><?php echo $row['a3'];?></td>
	<td><?php echo $row['a4'];?></td>
	<td><?php echo $row['correct'];?></td>

	<td><a href="update.php?id=<?php echo $row['id'];?>"><span class ="glyphicon glyphicon-edit"></span></a></td>
	<td><a href="list.php?id=<?php echo $row['id'];?>"><span class ="glyphicon glyphicon-trash"></span></a></td>
	
	</tr>

	<?php
}
?>
</table>
<?php
if(isset($_GET['id']))
        {
		$id = $_GET['id'];	
$query = mysql_query("DELETE FROM `Quiz` WHERE id='$id'");
 $result = mysql_query($query);
   echo "value remove";
} 
		?>
</form>

<?php include('footer.php');?>