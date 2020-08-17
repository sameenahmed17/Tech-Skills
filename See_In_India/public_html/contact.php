<?php 
	session_start();
	include("include/functions.php");
    $obj = new functions();
	
if(isset($_POST['submit'])) { 
	
	 $obj->aboutUs($_POST);
	
	}
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>See In India</title>
		
		<!-- meta description -->
		<meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
		
		<!-- meta keywords -->
		<meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
		
		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- favicon -->
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		
		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="bs3/css/bootstrap.css" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />        
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/colorbox.css" type="text/css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.colorbox.js"></script>
		 <script>
		$(document).ready(function() {
			
			$('.moreinfo1').colorbox({iframe:true,width:'80%',height:'80%' ,onClosed:function(){ location.reload(true); }});
		
		});
	</script>
	
<link href="SpryAssetsn/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssetsn/SpryTabbedPanels.js" type="text/javascript"></script>	
	
<link rel="stylesheet" type="text/css" href="calendern/tcal.css" />
<script type="text/javascript" src="calendern/tcal.js"></script>

<script type="text/javascript" src="js/modernizr.custom.17475.js"></script>

		<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
		<script type="text/javascript" src="bs3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	
	<script type="text/javascript">
  	function submitform(Form) { 
	
		
		var x=document.getElementById('adult').value;
		
		if(x=='None')
		{	
			alert("Please select atleast no of Persons or Group");
			return false;
		}
			
		if(Form.adult.value=='None') {
			alert("Please select number of adults / child for the trip");
			return false;
		}
		
		else if(parseInt(Form.adult.value) > parseInt(Form.a_avail.value)) {
			alert("The number of adults you have selected is greater than current availability. Please select proper value using check availability tab");
			return false;
		}
		
		if(parseInt(Form.child.value) > parseInt(Form.c_avail.value)) {
			alert("The number of child you have selected is greater than current availability. Please select proper value using check availability tab");
			return false;
		}
	}
	
  </script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56111840-1', 'auto');
  ga('send', 'pageview');

</script> 
	
	</head>
	<!-- END head -->

	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			<header>
				<!-- START #top-header -->
					<?php include 'header/top-header.php'; ?>
				<!-- END #top-header -->
				
				<!-- START #main-header -->
				<div id="main-header">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<a id="site-logo" href="index.php">
                                	<!--See In India-->
									<img src="img/logo.png" alt="See In India" />
								</a>
							</div>
							<div class="col-md-9">
								<nav class="main-nav">
									<span>MENU</span>
									<ul id="main-menu">
										<li><a href="index.php">One Day Tours</a></li>
										<!--<li><a href="#">Activities</a></li>-->
										<li><a href="need-more.php">Need More Than A day</a></li>
										
										<li><a href="car_rental.php">car rental india</a></li>
										<li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">24/7 Support</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- END #main-header -->
			</header>
			<!-- END header -->
			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper"><?php echo $tour_info['nameof_tour']?></h1>
							</section>
							
							<!-- breadcrumbs -->
						  <section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="index.php">Home</a></li>
									<li><a href="#">Contact</a></li>
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					<div class="row">
						<!-- START #page -->
						<div id="page" class="col-md-8">
							<? $contact = $obj->query("select * from cms WHERE title='Contact Us'"); ?>
							<? $result = $obj->fetch($contact); ?>
							<? echo $result['content'];?>
							
						</div>
						<!-- END #page -->
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								
								<div class="tab-content gray box-shadow1 clearfix marb30">
									
									<!-- END TAB 2 -->
																		
								</div>
								<!-- END TAB CONTENT -->
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar Newsletter -->
								<div class="styled-box gray">
									<h3 class="text-upper">Contact Us</h3>
									<form  method="post" name="contact-form">
										<label>Name :</label>
										<input type="text" required name="name" class="form-control input-style1 marb20" value=""  />
										
                                        <label>Email ID :</label>
										<input type="email" required name="email" class="form-control input-style1 marb20" value=""  />
										
                                        <label>Contact Number :</label>
										<input type="text" required name="contact" class="form-control input-style1 marb20" value=""  />
										
                                        <label>Comments :</label>
										<input type="text" required name="comment" class="form-control input-style1 marb20" value=""  />
										<input type="submit" name="submit" class="btn btn-primary text-upper marb20" value="Submit" />
									</form>
								</div>
							</div>
							
							
						</aside>
						<!-- END #sidebar -->
					</div>					
				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START footer -->
				<?php include 'header/bottom-footer.php';?>
			<!-- END footer -->
		</div>
		<!-- END #wrapper -->
		
		<!-- javascripts -->
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {			
			// initilize datepicker
			$(".date-picker").datepicker();
			});
			
			$(window).load(function(){
			  $('.carousel').flexslider({
				animation: "fade",
				animationLoop: true,
				controlNav: false,	
				maxItems: 1,
				pausePlay: false,
				mousewheel:true,
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
			
		</script>

	</body>
</html>