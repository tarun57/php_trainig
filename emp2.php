<?php
// initialize the mysql data
$connect = mysql_connect('localhost', 'root', '');
$select_db = mysql_select_db('pizone');

// define the id and length from url
//$id = mysql_real_escape_string($_GET['id']);
//$length = mysql_real_escape_string($_GET['length']);
if(isset($_GET['id']))
        {
$id = $_GET['id'];
// query quiz table for all columns
$query_quiz = "SELECT * FROM quiz WHERE id = '$id' LIMIT 1";

// if quiz query fails
if(!$query_quiz_result = mysql_query($query_quiz))
    {
        die("Couldn't run quiz query");
    }

// fetch whole array of quiz info
$quiz = mysql_fetch_array($query_quiz_result);



//query question table for all columns
$question = "SELECT * FROM quiz WHERE quiz = '$id' ORDER BY  rand() LIMIT 1";
$q_result = mysql_query($question) or die ("couldn't run questions query");


// store queried questions as an array to pass via session variables
$q_array = array();
while($row = mysql_fetch_assoc($q_result))
{
    $q_array[] = $row;
}

}
session_start();
$_SESSION['quiz'] = $id;
$_SESSION['questions'] = $q_array;
$_SESSION['length'] = $length;
?>

<html>
  <head>
    <title>Quiz <?php echo mysql_real_escape_string($_GET['id']);?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="container" style="margin-left: 30px;">


<!-- create the header using the quiz id and name -->
<h1 style="text-align: center;">Quiz <?php echo $quiz['id'] ?>: <?php echo $quiz['question'] ?></h1>

<hr />

<h4>This quiz will have a total of <?php echo $length?> questions.</h4>

<button onClick="parent.location='emp.php'">Begin Quiz</button>

    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
