<!DOCTYPE html>
<html lang="en">
	<head >
		<meta charset="utf-8">
		<title>Treasure Hunt @ CIT</title>
		<meta name="description" content="Online Treasure Hunt @ CIT">
		<meta name="Jana Ranjani" content="htmlcoder.me">
		
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
		<script type="text/javascript" src="index_page_jquery.js"></script>
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">CIT</a></div>
								<div class="site-slogan">Treasure Hunt</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#enter_hunt">Enter Hunt</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">Welcome to<span>CyberFest 2K15</span></h1>
							<p class="lead text-center"><a href="#enter_hunt" class="enter_hunt smooth-scroll">Enter Hunt</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="enter_hunt" class="title text-center">Register / Login</h1>
						<p class="lead text-center"></p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6 footer-content">
								<h3 class="title text-center">Registration</h3><br><br>
								<form id="reg_form" >
								<label for="team_name">Enter Team Name</label><br>
								<input type="text" name="team_name" id="team_name" class="form-control" ><br>
								<label for="user_1">Enter User Name </label><br>
								<input type="text" name="user_1" id="user_1" placeholder="User Name 1" class="form-control" >
								<input type="text" name="user_2" id="user_2" placeholder="User Name 2" class="form-control"><br><br>
								<label for="col_name">Enter College Name</label><br>
								<input type="text" name="col_name" id="col_name" class="form-control"><br><br>
								<label for="password">Enter Password</label><br>
								<input type="password" name="password" id="password" class="form-control" ><br>
								 <label for="con_password">Confirm Password</label><br>
								<input type="password" name="con_password" id="con_password" class="form-control" ><br>
								<center><label id="reg_from_comments"></label></center></br>
								<input type="button" class="btn btn-default" value="Register" id="reg_submit">
								<input type="reset"class="btn btn-default" value="Clear">
								<input type="hidden" name="req_id" value="1">
								</form>
								<div class="space"></div>
							</div>
							
							<div class="col-md-6">
								<h3 class="title text-center">Login</h3><br><br>
								<form id="footer-form" name="login">
								<label for="login_team_name">Enter Team Name</label> <br>
								<input type="text" name="login_team_name" id="login_team_name"  class="form-control" required="" ><br>
								<label for="login_password">Enter Password</label><br>
								<input type="password" name="login_password" id="login_password" class="form-control" required=""><br>
								<label id="login_err_msg"><i> User Name and Password Invalid</i></label><br>
								
								<input type="button" name="Submit" class="btn btn-default" value="Register">
								<input type="reset" name="clear" class="btn btn-default" value="Clear">
								</form>
							</div>
						</div>
						<div class="space"></div>
						<div class="row">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		



	

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<b><p class="text-center">Wish U All The Best!!Happy Hunting</p></b>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		
		
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
