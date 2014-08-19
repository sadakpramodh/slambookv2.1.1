<!doctype html>
<?php include "configuration.php";?>
<html>
<head>
<meta charset="utf-8">
<title><?php echo"$developerone; &nbsp; $projectname;";?>Developers</title>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Arial.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
	</script>
	<script type="text/javascript" src="js/fancyzoom.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('div.photo a').fancyZoom({directory: 'images/zoom', scaleImg: true, closeOnClick: true});
		});
	</script>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
	<div id="bg">
		<div class="wrap">
			
			<!-- logo -->
			<h1><a href="index.php"><?php echo"$projectname"; ?></a></h1>
			<!-- /logo -->
			
			<!-- menu -->
			<div id="mainmenu">
				<ul id="menu">
					<li><a class="current" href="index.php">Home</a></li>
					<li><a href="developers.php">Developers</a>
						<ul>
                        	<li><a href="developerone.php"><?php echo"$developerone"; ?></a></li>
                            <li><a href="developertwo.php"><?php echo"$developertwo"; ?></a></li>
                            <li><a href="developerthree.php"><?php echo"$developerthree"; ?></a></li>
                            <li><a href="developerfour.php"><?php echo"$developerfour"; ?></a></li>
                        </ul>
					</li>
					<!--<li><a href="portfolio.html">Portfolio</a></li>-->
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php">About Project</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
			<!-- /menu -->
			
			<!-- pitch -->
			<div id="pitch">
				<div id="slideshow">
					
					<!-- 1st frame -->
					<div class="active">
						<img src="images/pitch/pitch1.jpg" alt="" />
						<div class="overlay transparent">
							<h2><?php echo"$developerone"; ?></h2>
							<p><?php echo"$developeroneheadertext"; ?></p>
						</div>
						<p class="arrow"><a href="developerone.php"></a></p>
					</div>
					<!-- /1st frame -->
					
					<!-- 2nd frame -->
					<div>
						<img src="images/pitch/pitch2.jpg" alt="" />
						<div class="overlay transparent">
							<h2><?php echo"$developertwo"; ?></h2>
							<p><?php echo"$developertwoheadertext"; ?></p>
						</div>
						<p class="arrow"><a href="developertwo.php"></a></p>
					</div>
					<!-- /2nd frame -->
					
					<!-- 3rd frame -->
					<div>
						<img src="images/pitch/pitch3.jpg" alt="" />
						<div class="overlay transparent">
							<h2><?php echo"$developerthree"; ?></h2>
							<p><?php echo"$developerthreeheadertext"; ?></p>
						</div>
						<p class="arrow"><a href="developerthree.php"></a></p>
					</div>
					<!-- 3rd frame -->
                    <!-- 4th frame -->
					<div>
						<img src="images/pitch/pitch4.jpg" alt="" />
						<div class="overlay transparent">
							<h2><?php echo"$developerfour"; ?></h2>
							<p><?php echo"$developerfourheadertext"; ?></p>
						</div>
						<p class="arrow"><a href="developerfour.php"></a></p>
					</div>
					<!-- 4th frame -->
					
				</div>
			</div>
			<!-- /pitch -->
            <!-- main -->
			<div id="main">
				<div id="page">
					<h2 class="inner"><?php echo"$developerone" ?></h2>
					<p><?php echo"$developeronenote";?></p>
					
					<div class="clear"></div>					
					
				</div>
			</div>
			<!-- /main -->
			
			<!-- side -->
			<div id="side">
				<h4>Developers</h4>
				
				<ul class="side-menu">
					<li><a href="developerone.php"><?php echo"$developerone";?></a></li>
					<li><a href="developertwo.php"><?php echo"$developertwo";?></a></li>
					<li><a href="developerthree.php"><?php echo"$developerthree";?></a></li>
					<li><a href="developerfour.php"><?php echo"$developerfour";?></a></li>
				</ul>
				
			</div>
			<!-- /side -->
		</div>
			<!-- footer -->
		<div id="footer">
			<div id="footerbg">
				<div class="wrap">
				
					<!-- footer links -->
					<p id="footer_menu">
						<a href="mailto:<?php echo"$adminemailid"; ?>">mail me</a>
						<a href="disclaimer.php">Disclaimer</a>
						<a href="termsandconditions.php">Terms and Conditions</a>
						
						<!-- credit link -->
						<a href="<?php echo"$facebookpageurl";?>" title="<?php echo"$projectname"; ?> on facebook">slambook</a>
					</p>
					<!-- /footer links -->
					
					<p id="copy">&copy; <span><?php echo"$projectname";echo"-$year";?></span></p>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- /footer -->
		
	</div>
</body>
</html>
