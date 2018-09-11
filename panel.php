<?php
mysql_connect("localhost","root","");
mysql_select_db("pizone");
$sql = "SELECT id, cat_image FROM images ";
$resultset = mysql_query( $sql) or die("database error:". mysql_error());
$image_count = 0;
$button_html = '';
$slider_html = '';
$thumb_html = '';
while( $rows = mysql_fetch_assoc($resultset)){
$active_class = "";
if(!$image_count) {
$active_class = 'active';
$image_count = 1;
}
$image_count++;
$thumb_image = "nature_thumb_".$rows['id'].".jpg";
//slider image html
$slider_html.= "<div class='item ".$active_class."'>";
$slider_html.= "<img src='admin_panel/pages/image/".$rows['cat_image']."' alt='1.jpg' class='img-responsive' style='width:100%;height:300px;'>";
$slider_html.= "<div class='carousel-caption'></div></div>";
//Thumbnail html
$thumb_html.= "<li><img src='admin_panel/pages/image/".$thumb_image."' alt='$thumb_image'></li>";
//Button html
$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>
<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:admin.php');
		exit;
	}
	
?>
<DOCTYPE!>
<html>
<head>
<title> Pizone Infotech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#a{
	background-color:black;
}
.a{
width:100%;
height:20%;
background-color:rgb(75,109,128);
text-color:transparent;
text-align:center;
font-size:40px;
}
.b{
height:70%;
width:18%;
background-color:rgb(75,109,128);	
text-color:white;
font-size:20px;
}
a{
	color:white;
}
ul{
	color:white;
}

</style>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  
  if($_SESSION['email']==true)
{
echo "Welcome"." " . $_SESSION['email'];
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
    <div class="container" style="width:100%;">
<div id="carousel-example-generic" class="carousel slide"  data-interval="5000" data-ride="carousel" data-interval="false">
  <div class="carousel-caption" style="margin-bottom:2%;">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span style="font-size:50px;">Clean & Modern Design Quiz</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p style="font-size:20px;">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
                  </div>
                </form>
              </div>
            </div>
<ol class="carousel-indicators">
<?php echo $button_html; ?>
</ol>
<div class="carousel-inner">
<?php echo $slider_html; ?>
</div>
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
<ul class="thumbnails-carousel clearfix">
</ul>
</div>
</div>
    <!-- LOGO HEADER END-->
    <section class="menu-section" style="font-size:20px;padding:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index2.php">Dashboard</a></li>
                          
                            <li><a href="table2.php">Data Tables</a></li>
                            
                        
                         
                            <li><a target_blank href="admin.php">Admin</a></li>
                            <li><a href="tr.php">Training</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

<body style="background-color:rgb(59,71,89);">
<div class="a">
<span class="glyphicon glyphicon-user" style="font-size:70px;"></span>
<p>Welcome To Admin Panel</p>
</div>

<div class="b">
<ul>
<li><a href="ud.php" style="color:white;">Upload</a></li><hr>
<li><a href="list.php" style="color:white;">List</a></li><hr>

<li><a href="#" style="color:white;">Search</a></li><hr>


</ul>
</div>

<!-- start footer Area -->		
			<footer class="footer-area section-gap">
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
