<?php
				mysql_connect("localhost","root","");
				mysql_select_db("pizone");		
										$id=$_GET['id'];
								
								        $query1 = mysql_query("SELECT * FROM quiz WHERE id='$id'");
											while($row1 = mysql_fetch_array($query1))
											{
											   $question=$row1['question'];
												$a1=$row1['a1'];
												$a2=$row1['a2'];
												$a3=$row1['a3'];
												$a4=$row1['a4'];
												$correct=$row1['correct'];
											}
												?>
   <div class="form-group">
    <label for="Question">Question:</label>
    <input type="value" name="a" value="<?php echo  $question; ?>" class="form-control"><?php echo $row1['question']; ?>
	
  </div><br>
  <br>
 
  <div class="form-group">
    <label for="Question">Option A:</label>
    <input type="text" name="b" value="<?php echo $a1 ; ?>" class="form-control"><?php echo $row1['a1'] ; ?>
	
  </div><br>
  <br>
   <div class="form-group">
    <label for="Question">Option B:</label>
    <input type="text" name="c" value="<?php echo $a2 ; ?>" class="form-control"><?php echo $row1['a2'] ; ?>
	
  </div><br>
  <br>
   <div class="form-group">
    <label for="Question">Option C:</label>
    <input type="text" name="d" value="<?php echo  $a3  ; ?>" class="form-control"><?php echo $row1['a3'] ; ?>
	
  </div><br>
  <br>
   <div class="form-group">
    <label for="Question">Option D:</label>
    <input type="text" name="e" value="<?php echo  $a4 ; ?>" class="form-control"><?php echo $row1['a4'] ; ?>
	
  </div><br>
  <br>
   <div class="form-group">
    <label for="Question">Answer:</label>
    <input type="text" name="f" value="<?php echo $correct ; ?>" class="form-control"><?php echo $row1['correct'] ; ?>
	
  </div><br>
  <br>
											
   
  <input type="submit" name="submit" class="btn btn-default">
</form>

                                        <?php
                                        if(isset($_POST['submit'])){
                                        
										
										$question = $_POST['a'];
										$a1 = $_POST['b'];
									    $a2 = $_POST['c'];
										$a3 = $_POST['d'];
										$a4 = $_POST['e'];
										$correct = $_POST['f'];
																		
										if(is_uploaded_file)
										{
										
									
										$query=mysql_query("update quiz set question='$question',a1='$a1', a2='$a2', a3='$a3', a4='$a4', correct='$correct'where id='$id'");
										}
										else
										{
										
						$query=mysql_query("update quiz set question='$question',a1='$a1', a2='$a2',a3='$a3',a4='$a4',correct='$correct', where id='$id'");

										}
										if($query==true)
										{
										echo "category has been update";
										}
										else
										{
										echo "something is going wroong";
										}
										      
                                   }


                                        ?>
