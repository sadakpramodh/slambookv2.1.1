<?php


include 'lib/mysql.class.php';
include 'lib/options.class.php';
$options = new Options;
$page = new stdClass();

$admin = "sadakpramodh";
if($_POST) {
  // we first check the settings file
  if(!is_writable('inc/settings.php'))
    chmod('inc/settings.php', 0666);


  // we make the db connection
  $db = new SafeMySQL(array(
  'host'  => $_POST['dbhost'], 
  'user'  => $_POST['dbuser'], 
  'pass'  => $_POST['dbpass'], 
  'db'    => $_POST['dbname']));


  // once that is done we write the details in the settings file
  $host = str_replace("'", "\'", $_POST['dbhost']);
  $user = str_replace("'", "\'", $_POST['dbuser']);
  $pass = str_replace("'", "\'", $_POST['dbpass']);
  $name = str_replace("'", "\'", $_POST['dbname']);
  $prefix = str_replace("'", "\'", $_POST['tbprefix']);

$data =<<<EEE
<?php




// database details
\$set->db_host = '$host'; // database host
\$set->db_user = '$user'; // database user
\$set->db_pass = '$pass'; // database password
\$set->db_name = '$name'; // database name
\$db1_host = '$host'; // database host
\$db1_user = '$user'; // database user
\$db1_pass = '$pass'; // database password
\$db1_name = '$name'; // database name

define('MLS_PREFIX', '$prefix');  

EEE;

  // add the data to the file
  if(!file_put_contents('inc/settings.php', $data))
    $page->error = "There is an error with inc/settings.php make sure it is writable.";



  $sqls[] = "
  CREATE TABLE IF NOT EXISTS `".$prefix."banned` (
  `userid` int(11) NOT NULL,
  `until` int(11) NOT NULL,
  `by` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";


  $sqls[] = "
  CREATE TABLE IF NOT EXISTS `".$prefix."groups` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `canban` int(11) NOT NULL,
  `canhideavt` int(11) NOT NULL,
  `canedit` int(11) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";


$sqls[]="
CREATE TABLE IF NOT EXISTS `slambookpresetdata` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `bsname` varchar(50) NOT NULL,
  `bestfriendname` varchar(50) NOT NULL,
  `firstchildhoodfriendname` varchar(50) NOT NULL,
  `howdidyouknowme` varchar(50) NOT NULL,
  `doornumber` varchar(50) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `townname` varchar(50) NOT NULL,
  `distict` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `googleearthcoordinates` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `googleplus` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `eskimi` varchar(50) NOT NULL,
  `otherid` varchar(50) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `landlinenumber` varchar(50) NOT NULL,
  `voipnumber` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `zodiacsign` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `favcolor` varchar(50) NOT NULL,
  `favdress` varchar(50) NOT NULL,
  `favmusic` varchar(50) NOT NULL,
  `favgame` varchar(50) NOT NULL,
  `favdish` varchar(50) NOT NULL,
  `favbook` varchar(50) NOT NULL,
  `favactor` varchar(50) NOT NULL,
  `favsportsperson` varchar(50) NOT NULL,
  `moreinterestabout` varchar(50) NOT NULL,
  `thingsyoulikemostly` varchar(50) NOT NULL,
  `funniestmoment` varchar(50) NOT NULL,
  `dislikedish` varchar(50) NOT NULL,
  `dislikethingst` varchar(50) NOT NULL,
  `crazyaboutthings` varchar(50) NOT NULL,
  `anyotherdislikes` varchar(50) NOT NULL,
  `lifeambition` varchar(50) NOT NULL,
  `inspiredby` varchar(50) NOT NULL,
  `yourrolemodel` varchar(50) NOT NULL,
  `aboutyou` varchar(250) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `fullname` (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


";



 $sqls[]= "

CREATE TABLE IF NOT EXISTS `slambookrecords` (
  `uid` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `toemail` varchar(30) NOT NULL,
  `fromemail` varchar(30) NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL,
  `filelocation` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

";


  $sqls[] = "
  INSERT INTO `".$prefix."groups` (`groupid`, `name`, `type`, `priority`, `color`, `canban`, `canhideavt`, `canedit`) VALUES
(1, 'Guest', 0, 1, '', 0, 0, 0),
(2, 'Member', 1, 1, '#08c', 0, 0, 0),
(3, 'Moderator', 2, 1, 'green', 1, 1, 0),
(4, 'Administrator', 3, 1, '#F0A02D', 1, 1, 1);";

  $sqls[] = "
  CREATE TABLE IF NOT EXISTS `".$prefix."privacy` (
  `userid` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

  $sqls[] = "
  INSERT INTO `".$prefix."privacy` (`userid`, `email`) VALUES (1, 0);";
  $sqls[] = "
  CREATE TABLE IF NOT EXISTS `".$prefix."settings` (
  `site_name` varchar(255) NOT NULL DEFAULT 'Demo Site',
  `url` varchar(300) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `max_ban_period` int(11) NOT NULL DEFAULT '10',
  `register` int(11) NOT NULL DEFAULT '1',
  `email_validation` int(11) NOT NULL DEFAULT '0',
  `captcha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

  $sqls[] = $db->parse("
  INSERT INTO `".$prefix."settings` (`site_name`, `url`, `admin_email`, `max_ban_period`, `register`, `email_validation`, `captcha`) VALUES
(?s, ?s, 'sadakpramodh@live.com', 10, 1, 0, 1);", $_POST['sitename'], $_POST['siteurl']);

  $sqls[] = "
  CREATE TABLE IF NOT EXISTS `".$prefix."users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(50) NOT NULL,
  `validated` varchar(100) NOT NULL,
  `groupid` int(11) NOT NULL DEFAULT '2',
  `lastactive` int(11) NOT NULL,
  `showavt` int(11) NOT NULL DEFAULT '1',
  `banned` int(11) NOT NULL,
  `regtime` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";



  $sqls[] = "
  INSERT INTO `".$prefix."users` (`userid`, `username`, `display_name`, `password`, `email`, `key`, `validated`, `groupid`, `lastactive`, `showavt`, `banned`, `regtime`) VALUES
(1, 'sadakpramodh', 'sadakpramodh', 'daa4fed57359271bdd009e8aa836354884b4ebca', 'sadakpramodh@live.com', '', '1', 4, ".time().", 1, 0, ".time().");";


  $sqls[] = "INSERT INTO `slambookpresetdata`(`username`, `fullname`, `firstname`, `middlename`, `lastname`, `nickname`, `fathername`, `mothername`, `bsname`, `bestfriendname`, `firstchildhoodfriendname`, `howdidyouknowme`, `doornumber`, `landmark`, `townname`, `distict`, `state`, `country`, `postalcode`, `googleearthcoordinates`, `emailid`, `website`, `skype`, `linkedin`, `twitter`, `googleplus`, `facebook`, `eskimi`, `otherid`, `mobilenumber`, `landlinenumber`, `voipnumber`, `dateofbirth`, `zodiacsign`, `gender`, `favcolor`, `favdress`, `favmusic`, `favgame`, `favdish`, `favbook`, `favactor`, `favsportsperson`, `moreinterestabout`, `thingsyoulikemostly`, `funniestmoment`, `dislikedish`, `dislikethingst`, `crazyaboutthings`, `anyotherdislikes`, `lifeambition`, `inspiredby`, `yourrolemodel`, `aboutyou`) VALUES ('sadakpramodh','','','','','','','','','','','','','','','','','','','','','sadakpramodh@live.com','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');";


	$xml = new SimpleXMLElement('<user></user>');
	  $xml->addChild('username', 'sadakpramodh');
	  $xml->addChild('display_name', 'sadakpramodh');
	  $xml->addChild('email', 'sadakpramodh@live.com');
	  $xml->addChild('registered_date', '');
	  $xml->addChild('ipaddress', '');
	  $xml->asXML('users/' . $admin. '.xml');
	  
	  $xmluserspersonaldetails = new SimpleXMLElement('<userpersonaldetails></userpersonaldetails>');
		
		$xmluserspersonaldetails->addChild('fullname', 'sadakpramodh');
		$xmluserspersonaldetails->addchild('firstname','');
		$xmluserspersonaldetails->addchild('middlename','');
		$xmluserspersonaldetails->addchild('lastname','');
		$xmluserspersonaldetails->addchild('nickname',' ');
		$xmluserspersonaldetails->addchild('fathername','');
		$xmluserspersonaldetails->addchild('mothername','');
		$xmluserspersonaldetails->addchild('bsname','');
		$xmluserspersonaldetails->addchild('bestfriendname','');
		$xmluserspersonaldetails->addchild('firstchildhoodfriendname','');
		$xmluserspersonaldetails->addchild('howdidyouknowme','');
		$xmluserspersonaldetails->addchild('doornumber','');
		$xmluserspersonaldetails->addchild('landmark','');
		$xmluserspersonaldetails->addchild('townname','');
		$xmluserspersonaldetails->addchild('distict','');
		$xmluserspersonaldetails->addchild('state','');
		$xmluserspersonaldetails->addchild('country','');
		$xmluserspersonaldetails->addchild('postalcode','');
		$xmluserspersonaldetails->addchild('googleearthcoordinates','');
		$xmluserspersonaldetails->addchild('emailid', 'sadakpramodh@live.com');
		$xmluserspersonaldetails->addchild('website','');
		$xmluserspersonaldetails->addchild('skype','');
		$xmluserspersonaldetails->addchild('linkedin','');
		$xmluserspersonaldetails->addchild('twitter','');
		$xmluserspersonaldetails->addchild('googleplus','');
		$xmluserspersonaldetails->addchild('facebook','');
		$xmluserspersonaldetails->addchild('eskimi',' ');
		$xmluserspersonaldetails->addchild('otherid','');
		$xmluserspersonaldetails->addchild('mobilenumber','');
		$xmluserspersonaldetails->addchild('landlinenumber','');
		$xmluserspersonaldetails->addchild('voipnumber','');
		$xmluserspersonaldetails->addchild('dateofbirth','');
		$xmluserspersonaldetails->addchild('zodiacsign','');
		$xmluserspersonaldetails->addchild('gender','');
		$xmluserspersonaldetails->addchild('favcolor','');
		$xmluserspersonaldetails->addchild('favdress','');
		$xmluserspersonaldetails->addchild('favmusic','');
		$xmluserspersonaldetails->addchild('favgame','');
		$xmluserspersonaldetails->addchild('favdish','');
		$xmluserspersonaldetails->addchild('favbook','');
		$xmluserspersonaldetails->addchild('favactor','');
		$xmluserspersonaldetails->addchild('favsportsperson','');
		$xmluserspersonaldetails->addchild('moreinterestabout','');
		$xmluserspersonaldetails->addchild('thingsyoulikemostly','');
		$xmluserspersonaldetails->addchild('funniestmoment','');
		$xmluserspersonaldetails->addchild('dislikedish','');
		$xmluserspersonaldetails->addchild('dislikethingst','');
		$xmluserspersonaldetails->addchild('crazyaboutthings','');
		$xmluserspersonaldetails->addchild('anyotherdislikes','');
		$xmluserspersonaldetails->addchild('lifeambition','');
		$xmluserspersonaldetails->addchild('inspiredby','');
		$xmluserspersonaldetails->addchild('yourrolemodel','');
		$xmluserspersonaldetails->addchild('aboutyou','');
		$xmluserspersonaldetails->asXML('userspersonaldetails/' . $admin. '.xml');
	  


  foreach($sqls as $sql)
    if(!isset($page->error) && (!$db->query("?p",$sql)))
      $page->error = "There was a problem while executing <code>$sql</code>";



  if(!isset($page->error)) {
    $page->success = "The installation was successful ! Thank you for using skambook installation system and we hope you enjoy it ! Have fun ! <br/><br/>
    <a class='btn btn-success' href='./index.php'>Start exploring</a>
    <br/><br/>

    <h3>USER: sadakpramodh <br/> PASSWORD: slambook</h3>";
  }

}



?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Installer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- join the dark side :) -->
        <!-- <link rel="stylesheet" href="./css/darkstrap.min.css">-->
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="./css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="./css/main.css">

        <script src="./js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="?">SLAMBOOK INSTALLER</a>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
        

<?php

if(isset($page->error))
  $options->error($page->error);
else if(isset($page->success)) {
  $options->success($page->success);
  exit;
}

?>

    <div class='span3 hidden-phone'></div>



<form class="form-horizontal well span6" action="?" method="post">
<fieldset>

    <legend>Install form</legend>


    <div class="control-group">
      <label class="control-label" for="sitename">Site Name</label>
      <div class="controls">
        <input id="sitename" name="sitename" type="text" value="Demo Site" class="input-xlarge">
        <p class="help-block">The name of the site will be used in the top left corner.</p>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="siteurl">Site Url</label>
      <div class="controls">
        <input id="siteurl" name="siteurl" type="text" value="http://<?php echo $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);?>" class="input-xlarge">
        <p class="help-block">The url of your site(no end /).</p>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="dbhost">Database Host</label>
      <div class="controls">
        <input id="dbhost" name="dbhost" type="text" value="localhost" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="dbuser">Database Username</label>
      <div class="controls">
        <input id="dbuser" name="dbuser" type="text" value="root" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="dbpass">Database Password</label>
      <div class="controls">
        <input id="dbpass" name="dbpass" type="password" value="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="dbname">Database Name</label>
      <div class="controls">
        <input id="dbname" name="dbname" type="text" value="mls" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="tbprefix">Tables Prefix</label>
      <div class="controls">
        <input id="tbprefix" name="tbprefix" type="text" value="mls_" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <input type='submit' value='Install' class='btn btn-success'>
      </div>
    </div>

</fieldset>
</form>







</div> <!-- /container -->
   

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="./js/vendor/bootstrap.min.js"></script>

</body>
</html>