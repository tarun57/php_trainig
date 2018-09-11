<DOCTYPE!>
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


	<th>ID</th>
	<th>Course</th>

	</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
$query = mysql_query("SELECT college.Course,college.ID,student.Course  FROM college LEFT JOIN student ON college.ID=student.ID");
	while($row = mysql_fetch_array($query))
	{
	?>	
	<tr>
	
	<td><?php echo $row['ID'];?></td>
	<td><?php echo $row['Course'];?></td>

							
					</tr>
					<?php 
					}
				
			?>
</table>
</form>
</body>
</html>