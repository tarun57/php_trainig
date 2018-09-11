<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
if(!isset($_SESSION['current_id'])) {
    $_SESSION['current_id']="0";
    }
    $query = "SELECT answer FROM quiz WHERE (id=".$_SESSION['current_id'].")";
    $result = mysql_query($query);
    {
        $answer= $result['answer'];
    }
$result = mysql_query("SELECT * FROM quiz WHERE (evaluationid=".$evaluationid." AND id>". $_SESSION['current_id'].") ORDER BY id ASC LIMIT 1 ");
echo "<form  action='#' method='post'>";
echo "<table border='1' style='width:500px;'> <br />";
while($row = mysql_fetch_array($result))
    {
    echo "<tr>";
    $_SESSION['current_id'] = $row['id'];
    echo " <strong>" . $row['question'] . "</strong><br /><br /><br />";
    if ($row['type'] === 'MCQs')
    {
    echo "<input type='radio' value='' name='answer' checked />"; 
    echo  $row['possible_opt_1']; echo "<br />";
    echo "<input type='radio' value='' name='answer' />"; 
    echo  $row['possible_opt_2'];echo "<br />";
    echo "<input type='radio' value='' name='answer' />";
    echo  $row['possible_opt_3'];echo "<br />";
    echo "<input type='radio' value='' name='answer' />"; 
    echo  $row['possible_opt_4'];echo "<br /><br /><br />";
    }
    else {
         echo "<input type='radio' value='' name='answer' />"; 
         echo  $row['possible_opt_1']; echo "<br />";
         echo "<input type='radio' value='' name='answer' />"; 
         echo  $row['possible_opt_2'];echo "<br />";
            }
            echo "<input type='submit' name='next' value='next' />";
    echo "</tr>";
    }   
echo "</table>";
echo "</form>";
$result1 = mysql_query("SELECT id FROM questions WHERE (evaluationid=".$evaluationid.") ORDER BY id DESC LIMIT 1 ");
while($row = mysql_fetch_array($result1))
    {
         $_SESSION['last_id'] = $row['id'];
     }
mysql_close($con);
?>
<?php
$correct = 0;
$selected_opt=$_POST['answer'];
if ($selected_opt== $row['answer'])
{
    $correct+= 10;
    echo "your answer is right";
}
else 
{
echo "your answer is wrong";    
}
?>