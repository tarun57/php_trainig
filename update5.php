<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:update.php');
		exit;
	}
	
?>
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
<DOCTYPE!>
<html>
<head>
<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
h1{
	text-align:center;
	font-size:60px;
}

#k{
	padding:60px;
	align:center;
	margin-left:15%;
	margin-top:55px;
	margin-bottom:40px;
	background-image:url("ab.jpg");
}
</style>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>Pizone@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+94-14-53-72-75
					<li class='active' style='float:right;'>
									<?php 
									
									
 error_reporting(0);
 
    if($_SESSION['name']==true){ 
        echo $_SESSION['name'];
        echo '<a href="logout.php"><span>Logout</span></a></li>';
        }
    elseif($_SESSION['name']==false) 
        echo '<a href="http://localhost/web/index.php"><span>Login/Register</span></a></li>';
    ?>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="team3.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Amitesh sharma </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index2.php">Dashboard</a></li>
                            <li><a href="ui2.php">UI Elements</a></li>
                            <li><a href="table2.php">Data Tables</a></li>
                            <li><a href="forms2.php">Forms</a></li>
                             <li><a href="index.php">Login Page</a></li>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="blank2.php">Blank Page</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
</body>


<body style="background:linear-gradient(to right,rgb(49,71,85),rgb(38,160,218));">
<form method="post">
<div  class="col-xs-8" id="k" >
<h1>UPDATE YOUR QUESTIONS</h1>
 
  <div class="form-group">
    <label for="Question" style="font-size:20px;">Question:</label>
    <input type="text" value="<?php echo  $question; ?>" class="form-control" id="a" name="a"  required>
  </div>
  <div class="form-group">
    <label for="text" style="font-size:20px;">Option A:</label>
    <input type="text" value="<?php echo  $a1; ?>" class="form-control" id="b" name="b"  required>
  </div>
  <div class="form-group">
    <label for="b" style="font-size:20px;">Option B:</label>
    <input type="text" value="<?php echo  $a2; ?>" class="form-control" id="c" name="c"  required>
  </div>
  <div class="form-group">
    <label for="c" style="font-size:20px;">Option C:</label>
    <input type="text"  value="<?php echo  $a3; ?>" class="form-control" id="d" name="d"  required>
  </div>
  <div class="form-group">
    <label for="d" style="font-size:20px;">Option D:</label>
    <input type="text" value="<?php echo  $a4; ?>" class="form-control" id="e" name="e"  required>
  </div>
  <div class="form-group">
    <label for="e" style="font-size:20px;">Answer:</label>
    <input type="text"  value="<?php echo  $correct; ?>" class="form-control" id="f" name="f"  required>
  </div>

  <button type="submit" class="btn btn-default" name="submit">UPDATE</button>

</div>
</form>
</body>
</html>

                                        <?php
                                        if(isset($_POST['submit'])){
                                        
										
										$question = $_POST['a'];
										$a1 = $_POST['b'];
									    $a2 = $_POST['c'];
										$a3 = $_POST['d'];
										$a4 = $_POST['e'];
										$correct = $_POST['f'];
																		
										
										$id=$_GET['id'];
										
										
		 $query=mysql_query("update quiz set question='$question',a1='$a1',a2='$a2',a3='$a3',a4='$a4',correct='$correct' where id='$id'");
		
										// move_uploaded_file($tmp_img,"../images/$cat_image");
		// $query=mysql_query("update quiz set question='$question',a1='$a1', a2='$a2', a3='$a3', a4='$a4', correct='$correct'where id='$id'");
										// }
										// else
										// {
										
		// $query=mysql_query("update quiz set question='$question',a1='$a1', a2='$a2',a3='$a3',a4='$a4',correct='$correct', where id='$id'");

										// }
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

