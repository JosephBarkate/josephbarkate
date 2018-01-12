<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <title>Joseph Barkate</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <script src="assets/js/jquery.min.js"></script>
	<!--<script src=”jquery.mobile.custom.min.js”></script> -->
	<script src="assets/js/modernizr.custom.js"></script>
	<script src="assets/js/jquery.bcSwipe.js"></script>
	

	
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Joe Barkate</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll" onclick="closeMenu()">Home</a>
			<a href="#about" class="smoothScroll" onclick="closeMenu()">About</a>
			<a href="#portfolio" class="smoothScroll" onclick="closeMenu()">Portfolio</a>
			<a href="#contact" class="smoothScroll" onclick="closeMenu()">Contact</a>
			<a href="https://www.linkedin.com/in/joseph-barkate/"><i class="icon-linkedin"></i></a>
			<a href="https://github.com/JosephBarkate"><i class="icon-github"></i></a>
			<a href="#"><i class="icon-bitcoin"></i></a>
			<a href="mailto:josephbarkate@gmail.com"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>


	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="logo">
				<img src="assets/img/logo.png">
			</div>
			<br>
			<div class="row">
				<h1>Assuh</h1>
				<br>
				<h3>Hello, I'm Joe Barkate. I love myself.</h3>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	
	<!-- ========== ABOUT SECTION ========== -->
	<section id="about" name="about"></section>
	<div id="f">
		<div class="container">
			<div class="row">
				<h3>ABOUT ME</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<!-- INTRO INFORMATIO-->
				<div class="col-lg-6 col-lg-offset-3">
					<p>A full time software engineer based in Austin, Texas. I have a firey passion for technology.</p>
					<p>My passion is developing creative solutions and algorithms for unique and complex tasks.</p>
					<p>I sometimes play with cryptocurrency and the block chain. Need an OG? </p>
					<p>I'm available for dirty jobs &#x1F609. Contact me now.</p>
					<p><button type="button" class="btn btn-warning">I NEED YOU JOE</button></p>
				</div>								
			</div>
		</div><!-- /container -->
	</div><!-- /f -->

	<!-- ========== CAROUSEL SECTION ========== -->	
	<div>
	<section id="portfolio" name="portfolio"></section>
	<div id="f">
		<div class="container">
			<div class="row centered">
				<h3>SOME PROJECTS (Work in Progress)</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<div class="col-lg-6 col-lg-offset-3">
					<div id="carousel-example" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active centered">
								<img class="img-responsive" src="assets/img/Schwab_gif_desktop.gif" alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="assets/img/ResearchTube.gif" alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="assets/img/c3.png" alt="">
							</div>
						</div>
						<br>
						<br>
						<ol class="carousel-indicators">
						    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example" data-slide-to="1"></li>
						    <li data-target="#carousel-example" data-slide-to="2"></li>
						</ol>
					</div>
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- f -->

	<!-- ========== CONTACT SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
				<h3>CONTACT ME</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p>Austin, Texas<br/>United States<br/>(817) 791-6352</p>
					<p>JosephBarkate@gmail.com</p>
					<p><button type="button" class="btn btn-warning">YEAH! CONTACT ME NOW!</button></p>
				</div>
			</div>
		</div>
	</div>

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/mobileswipe.js"></script>
	<!-- Close menu script -->
	<script type="text/JavaScript">
		function closeMenu() {
		$("#theMenu").toggleClass("menu-open");
		}
	</script>

</body>
</html>
