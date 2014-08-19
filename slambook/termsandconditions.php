<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>slambook</title>

</head>

<body>

<?php


include "inc/init.php";
include('configuration.php' );


$page->title = "Hello ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';


echo "
<div class=\"container\">

<div class=\"hero-unit\">
    <h1>Hello ".$user->filter->username."! </h1> <br> <center>Terms and conditions</center> 
	
	
	 ";
	 $slambook_name = $user->filter->username;
if(!$user->islg()) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    }  else {

}
?>
<hr>



</div><!--/.nav-collapse -->
        </div>
    </div>
</div>";

</div></div> <!-- /container -->






<?php
echo "</div></div> <!-- /container -->";
include 'footer.php';

		
				
	
?>


</body>
</html>
