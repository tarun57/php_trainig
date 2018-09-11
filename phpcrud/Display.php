<?php
include_once 'dbconfig.php';
?>
<html>
<head>
<title>Dispaly DB Record</title>
<?php include 'header.php';?>
<body>
<a href ="index.php">Home</a>
<h1 style="text-align:center; color:blue; border-style:ridge;">User Records</h1>
 <div id="body">
 <div id="content"> 
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th><input type="checkbox" id="checkall" /><a href="Delete.php?delete_id=<?php echo $r[0];?>" data-toggle="tooltip" title="Delete"class="btn btn-danger"onclick="return confirm('Are You Sure to Delete This Record ?')"><span class="glyphicon glyphicon-trash"></span></a></th>
<th>User ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>City Name</th>
<th style="text-align:center;">Edit</th>
<th style="text-align:center;">Delete</th>
</thead>
    <tbody>
    
   <?php
$squery = "SELECT * FROM users where is_delete=0";
$result = mysql_query($squery);
while($r=mysql_fetch_row($result))
     {
?>
<tr>
       <td><input type="checkbox" class="checkthis" /></td>
       <td><?php echo $r[0];?><br></td>
       <td><?php echo $r[1];?><br></td>
       <td><?php echo $r[2];?><br></td>
       <td><?php echo $r[3];?><br></td>	
	   <td align="center"><a href="Edit.php?edit_id=<?php echo $r[0]; ?>"data-toggle="tooltip" title="Edit"class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></span></a>       </td>
       <td align="center"><a href="Delete.php?delete_id=<?php echo $r[0];?>" data-toggle="tooltip" title="Delete"class="btn btn-danger"onclick="return confirm('Are You Sure to Delete This Record ?')"><span class="glyphicon glyphicon-trash"></span></a></td>
<p data-placement="top" data-toggle="tooltip" title="Edit">
</tr> 
	
   <?php	   
	 }
	 
    ?>
</tbody>
</table>   
</table>
</div>
</div>
</head>
</body>
</html>