<?php
session_start();
if(!isset($_SESSION))
{
header('location:subject.php');
exit;
}
?>

<?php include("header.php");?>
<form method="post" id="form1">
  <input type="hidden" name="course_id" value="<?php echo $_GET['id'];?>">

<input type="submit" name="questions" id="questions" value="Submit">

<div id="response"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#form1").submit(function(event){
            event.preventDefault();
		$.ajax({
                    url:'questions.php',
                    type:'post',
                    data:$(this).serialize(),
                    success:function(result){
                        $("#response").html(result);
				}
			});
        });
    });
</script>
</form>
<?php include("footer.php");?>
