<?php



include "inc/init.php";



$page->title = "Welcome to ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';


echo "
<div class=\"container\">

<div class=\"hero-unit\">
    <h1>Welcome ".$user->filter->username." </h1>
	
	 ";
if(!$user->islg()) {
    echo " please login or register";

}
else{
	echo"<a href='slambook.php'>Please fill slambook</a>";
}


echo "</div></div> <!-- /container -->";
include 'footer.php';

		
				
	
?>
