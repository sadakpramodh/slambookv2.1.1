<?php




include "inc/init.php";
include 'lib/captcha/captcha.php';


if($user->islg()) { // if it's alreadt logged in redirect to the main page
  header("Location: $set->url");
  exit;
}


$page->title = "Register to ". $set->site_name;

// determine if captcha code is correct
$captcha = ((!$set->captcha) || ($set->captcha && isset($_SESSION['captcha']) && isset($_POST['captcha']) && ($_SESSION['captcha']['code'] === $_POST['captcha'])));

if($_POST && isset($_SESSION['token']) && ($_SESSION['token'] == $_POST['token']) && $set->register && $captcha) {

  // we validate the data

  $name = $_POST['name'];
  $display_name = $_POST['display_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $ipaddress = $_POST['ipaddress'];
  $regdate = $_POST['regdate'];


  if(!isset($name[3]) || isset($name[30]))
    $page->error = "Username too short or too long !";

  if(!$options->validUsername($name))
    $page->error = "Invalid username !";

  if(!isset($display_name[3]) || isset($display_name[50]))
    $page->error = "Display name too short or too long !";

  if(!isset($password[3]) || isset($password[30]))
    $page->error = "Password too short or too long !";

  if(!$options->isValidMail($email))
    $page->error = "Email address is not valid.";

  if($db->getRow("SELECT `userid` FROM `".MLS_PREFIX."users` WHERE `username` = ?s", $name))
    $page->error = "Username already in use !";

  if($db->getRow("SELECT `userid` FROM `".MLS_PREFIX."users` WHERE `email` = ?s", $email))
    $page->error = "Email already in use !";


  if(!isset($page->error)){
    $user_data = array(
      "username" => $name,
      "display_name" => $display_name,
      "password" => sha1($password),
      "email" => $email,
      "lastactive" => time(),
      "regtime" => time(),
      "validated" => 1
      );

    if($set->email_validation == 1) {

      $user_data["validated"] = $key = sha1(rand());

      $link = $set->url."/validate.php?key=".$key."&username=".urlencode($name);


      $url_info = parse_url($set->url);
      $from ="From: not.reply@".$url_info['host'];
      $sub = "Activate your account !";
      $msg = "Hello ".$options->html($name).",<br> Thank you for choosing to be a member of out community.<br/><br/> To confirm your account <a href='$link'>click here</a>.<br>If you can't access copy this to your browser<br/>$link  <br><br>Regards<br><small>Note: Dont reply to this email. If you got this email by mistake then ignore this email.</small>";
      if(!$options->sendMail($email, $sub, $msg, $from))
        // if we can't send the mail by some reason we automatically activate the account
          $user_data["validated"] = 1;
    }

    if(($db->query("INSERT INTO `".MLS_PREFIX."users` SET ?u", $user_data)) && ($id = $db->insertId()) && $db->query("INSERT INTO `".MLS_PREFIX."privacy` SET `userid` = ?i", $id)) {
      $page->success = 1;
      $_SESSION['user'] = $id; // we automatically login the user
      $user = new User($db);
	 

	  
    } else
      $page->error = "There was an error ! Please try again !";

  }


} else if($_POST)
  if(!$captcha)
    $page->error = "Invalid captcha code !";
  else
    $page->error = "Invalid request !";


include 'header.php';


if(!$set->register) // we check if the registration is enabled
  $options->fError("We are sorry registration is blocked momentarily please try again later !");


$_SESSION['token'] = sha1(rand()); // random token

if($set->captcha)
  $_SESSION['captcha'] = captcha();


$extra_content = ''; // holds success or error message

if(isset($page->error))
  $extra_content = $options->error($page->error);

if(isset($page->success)) {
 $xml = new SimpleXMLElement('<user></user>');
	  $xml->addChild('username', $name);
	  $xml->addChild('display_name', $display_name);
	  $xml->addChild('email', $email);
	  $xml->addChild('registered_date', $regdate);
	  $xml->addChild('ipaddress', $ipaddress);
	  $xml->asXML('users/' . $name. '.xml');
	  
	  $xmluserspersonaldetails = new SimpleXMLElement('<userpersonaldetails></userpersonaldetails>');
		
		$xmluserspersonaldetails->addChild('fullname', '');
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
		$xmluserspersonaldetails->addchild('emailid', $email);
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
		$xmluserspersonaldetails->asXML('userspersonaldetails/' . $name . '.xml');
	  

	  	$db = "$db1_name";
 $link = mysql_connect("$db1_host", "$db1_user", "$db1_pass");
 mysql_select_db($db, $link);
  mysql_query ("INSERT INTO slambookpresetdata(username,fullname,firstname,middlename,lastname,nickname,fathername,mothername,bsname,bestfriendname,firstchildhoodfriendname,howdidyouknowme,doornumber,landmark,townname,distict,state,country,postalcode,googleearthcoordinates,emailid,website,skype,linkedin,twitter,googleplus,facebook,eskimi,otherid,mobilenumber,landlinenumber,voipnumber,dateofbirth,zodiacsign,gender,favcolor,favdress,favmusic,favgame,favdish,favbook,favactor,favsportsperson,moreinterestabout,thingsyoulikemostly,funniestmoment,dislikedish,dislikethingst,crazyaboutthings,anyotherdislikes,lifeambition,inspiredby,yourrolemodel,aboutyou) VALUES ('$name','','','','','','','','','','','','','','','','','','','','','$email','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
  mysql_close();
  print mysql_error();
	  
	  
  echo "<div class='container'>
    <div class='span3 hidden-phone'></div>
    <div class='span6 well'>
    <h1>Congratulations !</h1>";
    $options->success("<p><strong>Your account was successfully registered !</strong></p>");
    echo " <a class='btn btn-primary' href='$set->url'>Start exploring</a>
    </div>
  </div>";


} else {


if($set->captcha)
$captcha =  "
  <div class='control-group'>
    <label class='control-label' for='captcha'>Enter the code:</label>
    <div class='controls'>
      <img src='".$_SESSION['captcha']['image_src']."'><br/>
      <input type='text' class='input-xlarge' name='captcha' id='captcha'>
    </div>
  </div>";
else
  $captcha = '';

  echo "
  <div class='container'>
    <div class='span3 hidden-phone'></div>
      <div class='span6'>

      ".$extra_content."

      <form action='#' id='contact-form' class='form-horizontal well' method='post'>
        <fieldset>
          <legend>Register Form </legend>

          <div class='control-group'>
            <label class='control-label' for='name'>Username</label>
            <div class='controls'>
              <input type='text' class='input-xlarge' name='name' id='name'>
            </div>
          </div>
          <div class='control-group'>
            <label class='control-label' for='display_name'>Display name</label>
            <div class='controls'>
              <input type='text' class='input-xlarge' name='display_name' id='display_name'>
            </div>
          </div>
          <div class='control-group'>
            <label class='control-label' for='email'>Email Address</label>
            <div class='controls'>
              <input type='text' class='input-xlarge' name='email' id='email'>
            </div>
          </div>
          <div class='control-group'>
            <label class='control-label' for='password'>Password</label>
            <div class='controls'>
              <input type='password' class='input-xlarge' name='password' id='password'>
            </div>
			<input type='hidden' name='ipaddress' value= '".$_SERVER['REMOTE_ADDR']."'>
			<input type='hidden' name='regdate' value='".date("l dS F Y h i s A T z")."'>
          </div>
          <input type='hidden' name='token' value='".$_SESSION['token']."'>
          $captcha
          <div class='form-actions'>
          <button type='submit' class='btn btn-primary btn-large'>Register</button>
            <button type='reset' class='btn'>Reset</button>
          </div>
        </fieldset>
      </form>
    </div>


  </div>";
}





include "footer.php";

