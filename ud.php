<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
$get_question = "SELECT * from quiz where id = $begin_id";
$result_get_question = mysqli_query($conn, $get_question);
$row_get_question = mysqli_fetch_array($result_get_question);

// Assign database response to variables
$question = $row_get_question['question'];
$a1 = $row_get_question['a1'];
$a2 = $row_get_question['a2'];
$a3 = $row_get_question['a3'];
$a4 = $row_get_question['a4'];
$correct = $row_get_question['correct'];

// Check user answer
if (isset($_POST['submit'])) {   
    $selected_radio = $_POST['response'];

    if ($selected_radio == $correct)
        echo "THAT ANSWER IS CORRECT";
    else
        echo "THAT ANSWER IS WRONG!";
}
?>
	