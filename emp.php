<?php
// continue the session
session_start();

// initialize the mysql data
$connect = mysql_connect('localhost', 'root', '');
$select_db = mysql_select_db('pizone');


$quiz_id = $_SESSION['quiz'];
$length = $_SESSION['length'];
$_SESSION['questions_array'] = $_SESSION['questions'];
//$current_question = array_shift($_SESSION['questions_array']);
$_SESSION['counter'] = 1;

$counter = $_SESSION['counter'];
?>

<html>
  <head>
    <title>Quiz <?php echo mysql_real_escape_string($_GET['id']);?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="container" style="margin-left: 30px;">

<h3>Question <?php echo $counter ?> of <?php echo $length ?></h3>

<hr />

<h4><?php echo $question['question']?></h4>

<?php
// define query for answers for each question
$id = $_GET['id'];
    $answers = 'SELECT `prompt` FROM `quiz` WHERE `quiz` = '.$id.' AND `question` = '.$question['id'].'';

    //if failed
    if(!$answers_result = mysql_query($answers)){
        die("Couldn't run answers query");
    }
    ?>

        <p style="margin-left: 50px;">
        <?php

    // if question type is "multiple choice", loop through answer choices and print them as options
    if ($current_question['if_short_answer'] == 0) {
        // loop through rows of answer choices
        while($a_row = mysql_fetch_array($answers_result))
        {
            // print each answer choice
            ?>
            <input type='radio' name='question_<?php echo $current_question['id']; ?>' value='<?php echo $a_row['question']?>'><?php echo $a_row['prompt']?>
            <br />

        <?php
        }
        echo "</p>";
    }

    // if question type is "short answer", create text box
    elseif ($current_question['if_short_answer'] == 1) {
        ?>
        <input type="text" name="question_<?php echo $current_question['id']; ?>" /><br />
    </p>

    <?php
    } ?>


<?php
if ($counter >= 1) { ?>
<button onClick="parent.location='next.php'">Next Question</button>
<?php
}

else { ?>
    <button onClick="parent.location='start.php'">Begin Quiz</button>
<?php
}
?>

    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
