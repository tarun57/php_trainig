

<HTML><HEAD><TITLE>Multiple Choice Questions:  A few questions to start</TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!--
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==2){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        if (number==2){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1>A few questions to start</H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>


<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="">

<BR>Percentaje of correct responses: 0 %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=0>
<input type=hidden name=ok value=0>
<input type=hidden name=Randon value=3>
<br>1 / 6</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
	<input type="hidden" name="course_id" value="<?php echo $_GET['id'];?>">
	<?php
			mysql_connect("localhost","root","");
			mysql_select_db("pizone");
			$course_id=$_GET['id'];
			$query = mysql_query("SELECT * FROM  `course` WHERE course_id='$course_id'");
			while($row = mysql_fetch_array($query)){
			$course_id=$row['course_id'];
			$course=$row['course'];
			 ?>
<a href="a.php?id=<?php echo $course_id;?>" class="btn btn-primary" ><?php echo  $row['course'];?></a></h1>
<?php
		 }
	 ?>
	 <br><br>
	<?php
	mysql_connect("localhost","root","");
	mysql_select_db("pizone");
  $id=$_GET['id'];
		$query = mysql_query("SELECT `id`, `question`, `a1`, `a2`, `a3`, `a4`, `correct` FROM `quiz` WHERE course_id='$id' ORDER BY RAND() LIMIT 1");
	 $i=1;
 while($fetched_row = mysql_fetch_array($query))
 {
 echo $i;
 $i++;
 echo ".";
?>
<b><?php echo $fetched_row['question'];?></b>
<BR> &nbsp; &nbsp; <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php echo $fetched_row['a1'];?><BR>
&nbsp; &nbsp; <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (2);"><?php echo $fetched_row['a2'];?><BR>
	&nbsp; &nbsp; <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (3);"><?php echo $fetched_row['a3'];?><BR>
			&nbsp; &nbsp; <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (4);"><?php echo $fetched_row['a4'];?><BR>
		&nbsp; &nbsp; <input type=text name=response size=8>
<?php }
?>
</FORM>


</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
