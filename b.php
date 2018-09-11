<html>
<head>
<title>DIC - Online Quiz Example Using PHP</title>
</head>
<body>
<?php
function readAnswerKey($filename) {
    $answerKey = array();
    if (file_exists($filename) && is_readable($filename)) {
        $answerKey = file($filename);
    }
    return $answerKey;
}
function readQuestions($filename) {
    $displayQuestions = array();
    if (file_exists($filename) && is_readable($filename)) {
        $questions = file($filename);
        foreach ($questions as $key => $value) {
            $displayQuestions[] = explode(":",$value);
        }
    }
    else { echo "Error finding or reading questions file."; }
    return $displayQuestions;
}
function displayTheQuestions($questions) {
    if (count($questions) > 0) {
        foreach ($questions as $key => $value) {
            echo "<b>$value[0]</b><br/><br/>";
            $choices = explode(",",$value[1]);
            foreach($choices as $value) {
                $letter = substr(trim($value),0,1);
                echo "<input type=\"radio\" name=\"$key\" value=\"$letter\">$value<br/>";
            }  echo "<br/>";
        }
    }
    else { echo "No questions to display."; }
}
function translateToGrade($percentage) {
    if ($percentage >= 90.0) { return "A"; }
    else if ($percentage >= 80.0) { return "B"; }
    else if ($percentage >= 70.0) { return "C"; }
    else if ($percentage >= 60.0) { return "D"; }
    else { return "F"; }
}
?>
<h2>Welcome to the Dream In Code Example Online Quiz!</h2>
<h4>Please complete the following questions as accurately as possible.</h4>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<?php
    $loadedQuestions = readQuestions("question.txt");
    displayTheQuestions($loadedQuestions);
?>
<input type="submit" name="submitquiz" value="Submit Quiz"/>
<?php
if (isset($_POST['submitquiz'])) {
    $answerKey = readAnswerKey("answerkey.txt");
    $answerCount = count($answerKey);
    $correctCount = 0;
    foreach ($answerKey as $key => $keyanswer) {
        if (isset($_POST[$key])) {
            if (strtoupper(rtrim($keyanswer)) == strtoupper($_POST[$key])) {
                $correctCount++;
            }
        }
    }
    echo "<br/><br/>Total Questions: $answerCount<br/>";
    echo "Number Correct: $correctCount<br/><br/>";
    if ($answerCount > 0) {
        $percentage = round((($correctCount / $answerCount) * 100),1);
        echo "Total Score: $percentage% (Grade: " . translateToGrade($percentage) . ")<br/>";
    }
    else {
      echo "Total Score: 0 (Grade: F)";
    }
}
?>
</form>
</body>
</html>
