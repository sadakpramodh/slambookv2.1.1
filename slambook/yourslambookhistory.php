<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>slambook</title>

</head>

<body>

<?php


include "inc/init.php";
include "configuration.php";


$page->title = "Hello ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';


echo "
<div class=\"container\">

<div class=\"hero-unit\">
    <h1>Hello ".$user->filter->username."! </h1> <br> Your slambook history. 
	
	
	 ";
	 $slambook_name = $user->filter->username;
if(!$user->islg()) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    }  else {

}
?>
<hr>
<font size="3">

<?php
echo"<table width='200' border='1' summary='slambook history' align='center' >
  <caption>
    Your slambook history
  </caption>
  <tr>
    <td>Username</td>
    <td>To</td>
    <td>From</td>
    <td>IP address</td>
    <td>Date</td>
    <td>File location</td>
  </tr>
 ";


$db = "$db1_name";
 		$link = mysql_connect("$db1_host", "$db1_user", "$db1_pass");
		mysql_select_db($db, $link);

$sql = mysql_query("SELECT * FROM slambookrecords where `username` = '$slambook_name'");
 
// Remember that FALSE will be returned when there are no more rows!
while ($row = mysql_fetch_assoc($sql)) {
  $username = $row['username'];
  $toemail = $row['toemail'];
  $fromemail = $row['fromemail'];
  $ipaddress = $row['ipaddress'];
  $date = $row['date'];
  $filelocation = $row['filelocation'];
 echo" 
 <tr>
    <td>" .$username ."</td>
    <td>" . $toemail ."</td>
    <td>" . $fromemail ."</td>
    <td>" . $ipaddress ."</td>
    <td>" . $date . "</td>
    <td> <a href='". $filelocation ."' target='new'>" . $filelocation ."</a></td>
  </tr>";
 
 }
 echo"</table>";
?>

</font>


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
