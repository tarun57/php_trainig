<DOCYTPE!>
<html>
<head>
<style>
table,th,td{
	    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<form method="post" action="join.php">
<table style="width:20%">
<tr>
	<th>Name</th>
</tr>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("pizone");
		$query = mysql_query("SELECT student.Name,college.Name FROM student INNER JOIN college ON student.StuID=college.StuID");
		while($row = mysql_fetch_array($query))
{
	?>	
	<tr>
	<td><?php echo $row['Name'];?></td>
	</tr>
					<?php 
					}
?>
</body>
</html>