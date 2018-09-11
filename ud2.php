<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:ud.php');
		exit;
	}
	
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
error_reporting(0);
if(isset($_POST['insert'])){
 $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  $d = $_POST['d'];
  $e = $_POST['e'];
  $f = $_POST['f'];
$query = mysql_query("INSERT INTO `quiz`( `question`, `a1`, `a2`, `a3`, `a4`, `correct`) VALUES ('$a','$b','$c','$d','$e','$f')");
$result = mysql_query($query);
echo "Value INSERT";
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
					&emsp;&emsp;&emsp;&emsp;
									<li class='active' style='float:right;'>
 <?php 
error_reporting(0);
  session_start();
  
  if($_SESSION['name']==true)
{
echo "Welcome"." " . $_SESSION['name'];
echo '<a href="logout.php"><span class ="glyphicon glyphicon-user" style="color:white;">Logout</span></a></li>';
}
else
{
header('location:admin.php');
}
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
					<img src="assets/img/logo.png"/>
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
                            
                            <li><a href="table2.php">Data Tables</a></li>
                          
                      
                            <li><a href="admin.php">Admin</a></li>
                <li><a href="tr.php">Training</a></li>
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
<h1>ADD YOUR QUESTIONS</h1>
  <div class="form-group">
    <label for="Question" style="font-size:20px;">Question:</label>
    <input type="text" class="form-control" id="a" name="a"  required>
  </div>
  <div class="form-group">
    <label for="text" style="font-size:20px;">Option A:</label>
    <input type="text" class="form-control" id="b" name="b"  required>
  </div>
  <div class="form-group">
    <label for="b" style="font-size:20px;">Option B:</label>
    <input type="text" class="form-control" id="c" name="c"  required>
  </div>
  <div class="form-group">
    <label for="c" style="font-size:20px;">Option C:</label>
    <input type="text" class="form-control" id="d" name="d"  required>
  </div>
  <div class="form-group">
    <label for="d" style="font-size:20px;">Option D:</label>
    <input type="text" class="form-control" id="e" name="e"  required>
  </div>
  <div class="form-group">
    <label for="e" style="font-size:20px;">Answer:</label>
    <input type="text" class="form-control" id="f" name="f"  required>
  </div>
	<button type="submit" class="btn btn-default" name="insert">INSERT</button>
  
</div>
</form>
<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="margin-top:55%;">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6 style="font-size:20px;">Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#" style="font-size:15px;">Managed Website</a></li>
									<li><a href="#" style="font-size:15px;">Manage Reputation</a></li>
									<li><a href="#" style="font-size:15px;">Power Tools</a></li>
									<li><a href="#" style="font-size:15px;">Web Service</a></li>
								</ul>
							</div>
						</div>
						<div  style="font-size:20px;margin-left:50%;margin-bottom:none;">
							<div class="single-footer-widget newsletter">
								<h6 style="font-size:20px;">Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget mail-chimp">
							
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
					<div class="col-lg-4 col-sm-12 footer-social" style="font-size:25px;margin-left:49%;">
							<a href="#"><i class="fa fa-facebook"></i></a>
							&emsp;<a href="#"><i class="fa fa-twitter"></i></a>
							&emsp;<a href="#"><i class="fa fa-dribbble"></i></a>
							&emsp;<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white" style="font-size:15px;margin-left:25%;margin-bottom:none;margin-top:6%;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						
						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/parallax.min.js"></script>			
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.DonutWidget.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>			
			<script src="js/main.js"></script>
</body>
</html>
