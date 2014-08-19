<?php
include "configuration.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title><?php echo"$projectname Blog"; ?></title>
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
			$('div.photo a').fancyZoom({scaleImg: true, closeOnClick: true});
		});
	</script>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
	<div id="bg">
		<div class="wrap">
			
			<!-- logo -->
			<h1><a href="index.html"><?php echo"$projectname"; ?></a></h1>
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
				<h2 class="inner">Blog</h2>
			<div id="page">
				
				<!-- blog post -->
				<div class="blog-post">
					<p class="blog-date"><span><?php echo "$blogpost1date";?></span><br /><?php echo "$blogpost1month";?></p>
					<div class="blog-body">
						<h3><a href="#"><?php echo "$blogpost1title";?></a></h3>
						<p><?php echo"$blogpost1content"; ?></p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- /blog post -->
				
				<!-- blog post -->
				<div class="blog-post">
					<p class="blog-date"><span><?php echo "$blogpost2date";?></span><br /><?php echo "$blogpost2month";?></p>
					<div class="blog-body">
						<h3><a href="#"><?php echo "$blogpost2title";?></a></h3>
						<p><?php echo"$blogpost2content"; ?></p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- /blog post -->
				
				<!-- blog post -->
				<div class="blog-post">
					<p class="blog-date"><span><?php echo "$blogpost3date";?></span><br /><?php echo "$blogpost3month";?></p>
					<div class="blog-body">
						<h3><a href="#"><?php echo "$blogpost3title";?></a></h3>
						<p><?php echo"$blogpost3content"; ?></p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- /blog post -->
				
			</div>
		
			</div>
			<!-- /main -->
			
			<!-- side -->
			<div id="side">
				<h4>Latest Release News</h4>
				
				<div class="news">
					<h5><a href="#"><?php echo"$latestreleasenewsheading1"; ?></a></h5>
					<p><?php echo"$latestreleasenewsheading1description"; ?></p>
				</div>
				
				<div class="news">
					<h5><a href="#"><?php echo"$latestreleasenewsheading2"; ?></a></h5>
					<p><?php echo"$latestreleasenewsheading2description"; ?></p>
				</div>
				
				<div class="news">
					<h5><a href="#"><?php echo"$latestreleasenewsheading3"; ?></a></h5>
					<p><?php echo"$latestreleasenewsheading3description"; ?></p>
				</div>
				

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