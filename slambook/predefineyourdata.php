<?php


include "inc/init.php";
include "configuration.php";



$page->title = "Welcome to ". $set->site_name;

$presets->setActive("home"); // we highlith the home link


include 'header.php';


echo "
<div class=\"container\">

<div class=\"hero-unit\">
    <h1>Hi ".$user->filter->username."! </h1>
	please enter your details.
	
	 ";
$slambook_name = $user->filter->username;

if(!$user->islg()) {
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    }  else {

}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>predefineyourdata</title>


 <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- join the dark side :) -->
        <!--link rel="stylesheet" href="css/darkstrap.min.css"-->
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="SpryAssets2/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <link href="SpryAssets2/SpryValidationSelect.css" rel="stylesheet" type="text/css">
        <link href="SpryAssets2/SpryValidationRadio.css" rel="stylesheet" type="text/css">
        <link href="SpryAssets2/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="SpryAssets2/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets2/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets2/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets2/SpryValidationTextarea.js" type="text/javascript"></script>
</head>

<body onLoad="getLocation()">


<?php
$xmluserspersonaldetails = new SimpleXMLElement('userspersonaldetails/' . $slambook_name . '.xml', 0, true);
?>


<?php
if(isset($_POST['predefineyourdata'])){

	$new_fullname = $_POST['fullname'];
	$new_firstname = $_POST['firstname'];
	$new_middlename = $_POST['middlename'];
	$new_lastname =$_POST['lastname'];
	$new_nickname =$_POST['nickname'];
	$new_fathername =$_POST['fathername'];
	$new_mothername =$_POST['mothername'];
	$new_bsname =$_POST['bsname'];
	$new_bestfriendname =$_POST['bestfriendname'];
	$new_firstchildhoodfriendname =$_POST['firstchildhoodfriendname'];
	$new_howdidyouknowme =$_POST['howdidyouknowme'];
	$new_doornumber =$_POST['doornumber'];
	$new_landmark =$_POST['landmark'];
	$new_townname =$_POST['townname'];
	$new_distict =$_POST['distict'];
	$new_state =$_POST['state'];
	$new_country =$_POST['country'];
	$new_postalcode =$_POST['postalcode'];
	$new_googleearthcoordinates =$_POST['googleearthcoordinates'];
	$new_emailid =$_POST['emailid'];
	$new_website =$_POST['website'];
	$new_skype =$_POST['skype'];
	$new_linkedin =$_POST['linkedin'];
	$new_twitter =$_POST['twitter'];
	$new_googleplus =$_POST['googleplus'];
	$new_facebook =$_POST['facebook'];
	$new_eskimi =$_POST['eskimi'];
	$new_otherid =$_POST['otherid'];
	$new_mobilenumber =$_POST['mobilenumber'];
	$new_landlinenumber =$_POST['landlinenumber'];
	$new_voipnumber =$_POST['voipnumber'];
	$new_dateofbirth =$_POST['dateofbirth'];
	$new_zodiacsign =$_POST['zodiacsign'];
	$new_gender =$_POST['gender'];
	$new_favcolor =$_POST['favcolor'];
	$new_favdress =$_POST['favdress'];
	$new_favmusic =$_POST['favmusic'];
	$new_favgame =$_POST['favgame'];
	$new_favdish =$_POST['favdish'];
	$new_favbook =$_POST['favbook'];
	$new_favactor =$_POST['favactor'];
	$new_favsportsperson =$_POST['favsportsperson'];
	$new_moreinterestabout =$_POST['moreinterestabout'];
	$new_thingsyoulikemostly =$_POST['thingsyoulikemostly'];
	$new_funniestmoment =$_POST['funniestmoment'];
	$new_dislikedish =$_POST['dislikedish'];
	$new_dislikethingst =$_POST['dislikethingst'];
	$new_crazyaboutthings =$_POST['crazyaboutthings'];
	$new_anyotherdislikes =$_POST['anyotherdislikes'];
	$new_lifeambition =$_POST['lifeambition'];
	$new_inspiredby =$_POST['inspiredby'];
	$new_yourrolemodel =$_POST['yourrolemodel'];
	$new_aboutyou =$_POST['aboutyou'];
	
	
	$xmluserspersonaldetails = new SimpleXMLElement('userspersonaldetails/' . $slambook_name . '.xml', 0, true);
	
	
		$xmluserspersonaldetails->fullname = $new_fullname;
		$xmluserspersonaldetails->firstname = $new_firstname;
		$xmluserspersonaldetails->middlename = $new_middlename;
		$xmluserspersonaldetails->lastname = $new_lastname;
		$xmluserspersonaldetails->nickname = $new_nickname;
		$xmluserspersonaldetails->fathername = $new_fathername;
		$xmluserspersonaldetails->mothername = $new_mothername;
		$xmluserspersonaldetails->bsname = $new_bsname;
		$xmluserspersonaldetails->bestfriendname = $new_bestfriendname;
		$xmluserspersonaldetails->firstchildhoodfriendname = $new_firstchildhoodfriendname;
		$xmluserspersonaldetails->howdidyouknowme = $new_howdidyouknowme;
		$xmluserspersonaldetails->doornumber = $new_doornumber;
		$xmluserspersonaldetails->landmark = $new_landmark;
		$xmluserspersonaldetails->townname = $new_townname;
		$xmluserspersonaldetails->distict = $new_distict;
		$xmluserspersonaldetails->state = $new_state;
		$xmluserspersonaldetails->country = $new_country;
		$xmluserspersonaldetails->postalcode = $new_postalcode;
		$xmluserspersonaldetails->googleearthcoordinates = $new_googleearthcoordinates;
		$xmluserspersonaldetails->emailid = $new_emailid;
		$xmluserspersonaldetails->website = $new_website;
		$xmluserspersonaldetails->skype = $new_skype;
		$xmluserspersonaldetails->linkedin = $new_linkedin;
		$xmluserspersonaldetails->twitter = $new_twitter;
		$xmluserspersonaldetails->googleplus = $new_googleplus;
		$xmluserspersonaldetails->facebook = $new_facebook;
		$xmluserspersonaldetails->eskimi = $new_eskimi;
		$xmluserspersonaldetails->otherid = $new_otherid;
		$xmluserspersonaldetails->mobilenumber = $new_mobilenumber;
		$xmluserspersonaldetails->landlinenumber = $new_landlinenumber;
		$xmluserspersonaldetails->voipnumber = $new_voipnumber;
		$xmluserspersonaldetails->dateofbirth = $new_dateofbirth;
		$xmluserspersonaldetails->zodiacsign = $new_zodiacsign;
		$xmluserspersonaldetails->gender = $new_gender;
		$xmluserspersonaldetails->favcolor = $new_favcolor;
		$xmluserspersonaldetails->favdress = $new_favdress;
		$xmluserspersonaldetails->favmusic = $new_favmusic;
		$xmluserspersonaldetails->favgame = $new_favgame;
		$xmluserspersonaldetails->favdish = $new_favdish;
		$xmluserspersonaldetails->favbook = $new_favbook;
		$xmluserspersonaldetails->favactor = $new_favactor;
		$xmluserspersonaldetails->favsportsperson = $new_favsportsperson;
		$xmluserspersonaldetails->moreinterestabout = $new_moreinterestabout;
		$xmluserspersonaldetails->thingsyoulikemostly = $new_thingsyoulikemostly;
		$xmluserspersonaldetails->funniestmoment = $new_funniestmoment;
		$xmluserspersonaldetails->dislikedish = $new_dislikedish;
		$xmluserspersonaldetails->dislikethingst = $new_dislikethingst;
		$xmluserspersonaldetails->crazyaboutthings = $new_crazyaboutthings;
		$xmluserspersonaldetails->anyotherdislikes = $new_anyotherdislikes;
		$xmluserspersonaldetails->lifeambition = $new_lifeambition;
		$xmluserspersonaldetails->inspiredby = $new_inspiredby;
		$xmluserspersonaldetails->yourrolemodel = $new_yourrolemodel;
		$xmluserspersonaldetails->aboutyou = $new_aboutyou;
	
	
	
			$xmluserspersonaldetails->asXML('userspersonaldetails/' . $slambook_name . '.xml');
				  	$db = "$db1_name";
 $link = mysql_connect("$db1_host", "$db1_user", "$db1_pass");
 mysql_select_db($db, $link);
  mysql_query ("UPDATE slambookpresetdata SET `fullname` = '$new_fullname' , `firstname` = '$new_firstname',`middlename` = '$new_middlename',`lastname` = '$new_lastname',`nickname` = '$new_nickname',`fathername` ='$new_fathername',`mothername` = '$new_mothername',`bsname` = '$new_bsname',`bestfriendname` = '$new_bestfriendname',`firstchildhoodfriendname` = '$new_firstchildhoodfriendname',`howdidyouknowme` = '$new_howdidyouknowme',`doornumber` = '$new_doornumber',`landmark` ='$new_landmark',`townname` = '$new_townname',`distict` = '$new_distict',`state` = '$new_state',`country` = '$new_country',`postalcode` = '$new_postalcode',`googleearthcoordinates` = '$new_googleearthcoordinates',`emailid` = '$new_emailid',`website` = '$new_website',`skype` = '$new_skype',`linkedin`= '$new_linkedin',`twitter` = '$new_twitter',`googleplus` = '$new_googleplus',`facebook` = '$new_facebook',`eskimi` = '$new_eskimi',`otherid` = '$new_otherid',`mobilenumber` = '$new_mobilenumber',`landlinenumber` = '$new_landlinenumber',`voipnumber` = '$new_voipnumber',`dateofbirth` = '$new_dateofbirth',`zodiacsign` = '$new_zodiacsign',`gender` = '$new_gender',`favcolor` = '$new_favcolor',`favdress` = '$new_favdress',`favmusic` ='$new_favmusic',`favgame` = '$new_favgame',`favdish` = '$new_favdish',`favbook` = '$new_favbook',`favactor` = '$new_favactor',`favsportsperson` = '$new_favsportsperson',`moreinterestabout` = '$new_moreinterestabout',`thingsyoulikemostly` = '$new_thingsyoulikemostly',`funniestmoment` = '$new_funniestmoment',`dislikedish` = '$new_dislikedish',`dislikethingst` = '$new_dislikethingst',`crazyaboutthings` = '$new_crazyaboutthings',`anyotherdislikes` = '$new_anyotherdislikes',`lifeambition` = '$new_lifeambition',`inspiredby` = '$new_inspiredby',`yourrolemodel` = '$new_yourrolemodel',`aboutyou` = '$new_aboutyou' where `username` = '$slambook_name'");
 
  mysql_close();
  print mysql_error();
	

echo "<script>alert('Values are successfully saved');</script>";
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
	
}


?>

<center>
<FORM action="" method="post" name="predefineyourdata">

  <p><BR>
    <strong>Name Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>First Name:</label><input type="text" name="firstname" value="<?php print "$xmluserspersonaldetails->firstname";?>"/></td>
      <td><label>Middle Name:</label><input type="text" name="middlename" value="<?php print "$xmluserspersonaldetails->middlename"; ?>"/></td>
      <td><label>Last Name:</label><input type="text" name="lastname" value="<?php print "$xmluserspersonaldetails->lastname";?>"/></td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Full Name:</label>
        <span class="badge-info" id="sprytextfield1">
        <input type="text" name="fullname" id="fullname" value="<?php print "$xmluserspersonaldetails->fullname";?>">
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        
   	  </td>
      <td><label>Nick Name:</label><input type="text" name="nickname" value="<?php print "$xmluserspersonaldetails->nickname";?>"/></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <hr />
  <p><BR>
    <strong>Friends &amp; Family Column</strong></p>
  <table width="93%" border="0">
    <tr>
      <td><label>Father Name:</label><input type="text" name="fathername" value="<?php print "$xmluserspersonaldetails->fathername";?>"/></td>
      <td><label>Mother Name:</label><input type="text" name="mothername" value="<?php print "$xmluserspersonaldetails->mothername";?>"/></td>
      <td><label>Brother / Sister Name:</label><input type="text" name="bsname" value="<?php print "$xmluserspersonaldetails->bsname";?>"/></td>
    </tr>
    <tr>
      <td><label>Best Friend Name:</label><input type="text" name="bestfriendname" value="<?php print "$xmluserspersonaldetails->bestfriendname";?>"/></td>
      <td><label>First Childhood Friend Name:</label><input type="text" name="firstchildhoodfriendname" value="<?php print "$xmluserspersonaldetails->firstchildhoodfriendname";?>"/></td>
      <td><label>How do you know me?:</label><input type="text" name="howdidyouknowme" value="<?php print "$xmluserspersonaldetails->howdidyouknowme";?>"/></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Postal Address Column</strong>
  </p>

  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Door / House Number:</label><span id="sprytextfield2">
        <input type="text" name="doornumber"  id="doornumber" value="<?php print "$xmluserspersonaldetails->doornumber";?>">
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
      <td><label><font color='red'>*</font>Land Mark:</label>
        <span id="sprytextfield3">
        <input type="text" name="landmark" id="landmark" value="<?php print "$xmluserspersonaldetails->landmark";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span>
      
        </td>
      <td><label><font color='red'>*</font>City / Town / Village Name:</label>
        <span id="sprytextfield4">
        <input type="text" name="townname" id="townname" value="<?php print "$xmluserspersonaldetails->townname";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span>
      
       </td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>District:</label>
    	<span id="sprytextfield5">
        <input type="text" name="distict" id="distict" value="<?php print "$xmluserspersonaldetails->distict";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span>
    	
       </td>
      <td><label><font color='red'>*</font>State/provenance:</label>
        <span id="sprytextfield6">
        <input type="text" name="state" id="state" value="<?php print "$xmluserspersonaldetails->state";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span>
        
       </td>
      <td><label><font color='red'>*</font>Country:</label>
        <span id="spryselect1">
        
    
        
<select name="country" id="country">
<option value="<?php print "$xmluserspersonaldetails->country";?>" selected="selected"><?php print "$xmluserspersonaldetails->country";?></option>
  <option value="af">Afghanistan</option>
        <option value="ax">Aland Islands</option>
        <option value="al">Albania</option>
        <option value="dz">Algeria</option>
        <option value="as">American Samoa</option>
        <option value="ad">Andorra</option>
        <option value="ao">Angola</option>
        <option value="ai">Anguilla</option>
        <option value="aq">Antarctica</option>
        <option value="ag">Antigua and Barbuda</option>
        <option value="ar">Argentina</option>
        <option value="am">Armenia</option>
        <option value="aw">Aruba</option>
        <option value="ap">Asia/Pacific Region</option>
        <option value="au">Australia</option>
        <option value="at">Austria</option>
        <option value="az">Azerbaijan</option>
        <option value="bs">Bahamas</option>
        <option value="bh">Bahrain</option>
        <option value="bd">Bangladesh</option>
        <option value="bb">Barbados</option>
        <option value="by">Belarus</option>
        <option value="be">Belgium</option>
        <option value="bz">Belize</option>
        <option value="bj">Benin</option>
        <option value="bm">Bermuda</option>
        <option value="bt">Bhutan</option>
        <option value="bo">Bolivia</option>
        <option value="ba">Bosnia and Herzegovina</option>
        <option value="bw">Botswana</option>
        <option value="bv">Bouvet Island</option>
        <option value="br">Brazil</option>
        <option value="io">British Indian Ocean Territory</option>
        <option value="bn">Brunei Darussalam</option>
        <option value="bg">Bulgaria</option>
        <option value="bf">Burkina Faso</option>
        <option value="bi">Burundi</option>
        <option value="kh">Cambodia</option>
        <option value="cm">Cameroon</option>
        <option value="ca">Canada</option>
        <option value="cv">Cape Verde</option>
        <option value="ky">Cayman Islands</option>
        <option value="cf">Central African Republic</option>
        <option value="td">Chad</option>
        <option value="cl">Chile</option>
        <option value="cn">China</option>
        <option value="cx">Christmas Island</option>
        <option value="cc">Cocos (Keeling) Islands</option>
        <option value="co">Colombia</option>
        <option value="km">Comoros</option>
        <option value="cg">Congo</option>
        <option value="cd">Congo DRC</option>
        <option value="ck">Cook Islands</option>
        <option value="cr">Costa Rica</option>
        <option value="ci">Cote d'Ivoire</option>
        <option value="hr">Croatia</option>
        <option value="cu">Cuba</option>
        <option value="cy">Cyprus</option>
        <option value="cz">Czech Republic</option>
        <option value="dk">Denmark</option>
        <option value="dj">Djibouti</option>
        <option value="dm">Dominica</option>
        <option value="do">Dominican Republic</option>
        <option value="ec">Ecuador</option>
        <option value="eg">Egypt</option>
        <option value="sv">El Salvador</option>
        <option value="gq">Equatorial Guinea</option>
        <option value="er">Eritrea</option>
        <option value="ee">Estonia</option>
        <option value="et">Ethiopia</option>
        <option value="eu">Europe</option>
        <option value="fk">Falkland Islands (Malvinas)</option>
        <option value="fo">Faroe Islands</option>
        <option value="fj">Fiji</option>
        <option value="fi">Finland</option>
        <option value="fr">France</option>
        <option value="gf">French Guiana</option>
        <option value="pf">French Polynesia</option>
        <option value="tf">French Southern Territories</option>
        <option value="ga">Gabon</option>
        <option value="gm">Gambia</option>
        <option value="ge">Georgia</option>
        <option value="de">Germany</option>
        <option value="gh">Ghana</option>
        <option value="gi">Gibraltar</option>
        <option value="gr">Greece</option>
        <option value="gl">Greenland</option>
        <option value="gd">Grenada</option>
        <option value="gp">Guadeloupe</option>
        <option value="gu">Guam</option>
        <option value="gt">Guatemala</option>
        <option value="gg">Guernsey</option>
        <option value="gn">Guinea</option>
        <option value="gw">Guinea-Bissau</option>
        <option value="gy">Guyana</option>
        <option value="ht">Haiti</option>
        <option value="hm">Heard Island and McDonald Islands</option>
        <option value="va">Holy See (Vatican City State)</option>
        <option value="hn">Honduras</option>
        <option value="hk">Hong Kong</option>
        <option value="hu">Hungary</option>
        <option value="is">Iceland</option>
        <option value="india">India</option>
        <option value="id">Indonesia</option>
        <option value="ir">Iran</option>
        <option value="iq">Iraq</option>
        <option value="ie">Ireland</option>
        <option value="im">Isle of Man</option>
        <option value="il">Israel</option>
        <option value="it">Italy</option>
        <option value="jm">Jamaica</option>
        <option value="jp">Japan</option>
        <option value="je">Jersey</option>
        <option value="jo">Jordan</option>
        <option value="kz">Kazakhstan</option>
        <option value="ke">Kenya</option>
        <option value="ki">Kiribati</option>
        <option value="kp">Korea</option>
        <option value="kr">Korea</option>
        <option value="kw">Kuwait</option>
        <option value="kg">Kyrgyzstan</option>
        <option value="la">Lao People's Democratic Republic</option>
        <option value="lv">Latvia</option>
        <option value="lb">Lebanon</option>
        <option value="ls">Lesotho</option>
        <option value="lr">Liberia</option>
        <option value="ly">Libyan Arab Jamahiriya</option>
        <option value="li">Liechtenstein</option>
        <option value="lt">Lietuva</option>
        <option value="lu">Luxembourg</option>
        <option value="mo">Macao</option>
        <option value="mk">Macedonia</option>
        <option value="mg">Madagascar</option>
        <option value="mw">Malawi</option>
        <option value="my">Malaysia</option>
        <option value="mv">Maldives</option>
        <option value="ml">Mali</option>
        <option value="mt">Malta</option>
        <option value="mh">Marshall Islands</option>
        <option value="mq">Martinique</option>
        <option value="mr">Mauritania</option>
        <option value="mu">Mauritius</option>
        <option value="yt">Mayotte</option>
        <option value="mx">Mexico</option>
        <option value="fm">Micronesia</option>
        <option value="md">Moldova</option>
        <option value="mc">Monaco</option>
        <option value="mn">Mongolia</option>
        <option value="me">Montenegro</option>
        <option value="ms">Montserrat</option>
        <option value="ma">Morocco</option>
        <option value="mz">Mozambique</option>
        <option value="mm">Myanmar</option>
        <option value="na">Namibia</option>
        <option value="nr">Nauru</option>
        <option value="np">Nepal</option>
        <option value="nl">Netherlands</option>
        <option value="an">Netherlands Antilles</option>
        <option value="nc">New Caledonia</option>
        <option value="nz">New Zealand</option>
        <option value="ni">Nicaragua</option>
        <option value="ne">Niger</option>
        <option value="ng">Nigeria</option>
        <option value="nu">Niue</option>
        <option value="nf">Norfolk Island</option>
        <option value="mp">Northern Mariana Islands</option>
        <option value="no">Norway</option>
        <option value="om">Oman</option>
        <option value="pk">Pakistan</option>
        <option value="pw">Palau</option>
        <option value="ps">Palestinian Territory</option>
        <option value="pa">Panama</option>
        <option value="pg">Papua New Guinea</option>
        <option value="py">Paraguay</option>
        <option value="pe">Peru</option>
        <option value="ph">Philippines</option>
        <option value="pn">Pitcairn</option>
        <option value="pl">Poland</option>
        <option value="pt">Portugal</option>
        <option value="pr">Puerto Rico</option>
        <option value="qa">Qatar</option>
        <option value="re">Reunion</option>
        <option value="ro">Romania</option>
        <option value="ru">Russian Federation</option>
        <option value="rw">Rwanda</option>
        <option value="sh">Saint Helena</option>
        <option value="kn">Saint Kitts and Nevis</option>
        <option value="lc">Saint Lucia</option>
        <option value="pm">Saint Pierre and Miquelon</option>
        <option value="vc">Saint Vincent and the Grenadin</option>
        <option value="ws">Samoa</option>
        <option value="sm">San Marino</option>
        <option value="st">Sao Tome and Principe</option>
        <option value="sa">Saudi Arabia</option>
        <option value="sn">Senegal</option>
        <option value="rs">Serbia</option>
        <option value="sc">Seychelles</option>
        <option value="sl">Sierra Leone</option>
        <option value="sg">Singapore</option>
        <option value="sk">Slovakia</option>
        <option value="si">Slovenia</option>
        <option value="sb">Solomon Islands</option>
        <option value="so">Somalia</option>
        <option value="za">South Africa</option>
        <option value="gs">South Georgia and the South Sandwich Islands</option>
        <option value="es">Spain</option>
        <option value="lk">Sri Lanka</option>
        <option value="sd">Sudan</option>
        <option value="sr">Suriname</option>
        <option value="sj">Svalbard and Jan Mayen</option>
        <option value="sz">Swaziland</option>
        <option value="se">Sweden</option>
        <option value="ch">Switzerland</option>
        <option value="sy">Syrian Arab Republic</option>
        <option value="tw">Taiwan</option>
        <option value="tj">Tajikistan</option>
        <option value="tz">Tanzania</option>
        <option value="th">Thailand</option>
        <option value="tl">Timor-Leste</option>
        <option value="tg">Togo</option>
        <option value="tk">Tokelau</option>
        <option value="to">Tonga</option>
        <option value="tt">Trinidad and Tobago</option>
        <option value="tn">Tunisia</option>
        <option value="tr">Turkey</option>
        <option value="tm">Turkmenistan</option>
        <option value="tc">Turks and Caicos Islands</option>
        <option value="tv">Tuvalu</option>
        <option value="ug">Uganda</option>
        <option value="ua">Ukraine</option>
        <option value="ae">United Arab Emirates</option>
        <option value="gb">United Kingdom</option>
        <option value="us">United States</option>
        <option value="um">United States Minor Outlying Islands</option>
        <option value="uy">Uruguay</option>
        <option value="uz">Uzbekistan</option>
        <option value="vu">Vanuatu</option>
        <option value="ve">Venezuela</option>
        <option value="vn">Vietnam</option>
        <option value="vg">Virgin Islands</option>
        <option value="vi">Virgin Islands</option>
        <option value="wf">Wallis and Futuna</option>
        <option value="eh">Western Sahara</option>
        <option value="ye">Yemen</option>
        <option value="zm">Zambia</option>
        <option value="zw">Zimbabwe</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
      </td>
    </tr>
    <tr>
      <td><label><font color='red'>*</font>Postal / Zip Code:</label>
        <span id="sprytextfield7">
        <input type="text" name="postalcode" id="postalcode" value="<?php print "$xmluserspersonaldetails->postalcode";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span>
        
        </td>
      <td><label>Earth Coordinates(Longitude,Latitude):</label>
     

     
     <!--script language="javascript">
	 var geo;
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.watchPosition(showPosition);
    }
  else{alert("Geolocation is not supported by this browser.");}
  }
function showPosition(position)
  {
  geo = "Latitude: " + position.coords.latitude +  "  Longitude: " + position.coords.longitude ; 
  <?php /*
	 $geox = geo;*/
	?>	
  }
</script-->
	


      <input type="text" name="googleearthcoordinates" value="<?php print "$xmluserspersonaldetails->googleearthcoordinates"; ?>"> <a href="geo.php" target="new"><img src="images/geo.JPG" alt="GPS" title="click here for knowing your GPS coordinates"></a>
      </td>
      <td></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Email Id:</label>
        <span id="sprytextfield8">
        <input type="text" name="emailid" id="emailid" value="<?php print "$xmluserspersonaldetails->emailid";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
        
        </td>
      <td><label>Website:</label><input type="url" name="website" value="<?php print "$xmluserspersonaldetails->website";?>"/></td>
      <td><label>Skype Id:</label><input type="text" name="skype" value="<?php print "$xmluserspersonaldetails->skype";?>"/></td>
    </tr>
    <tr>
      <td><label>Linked In:</label><input type="url" name="linkedin" value="<?php print "$xmluserspersonaldetails->linkedin";?>"/></td>
      <td><label>Twitter:</label><input type="url" name="twitter" value="<?php print "$xmluserspersonaldetails->twitter";?>"/></td>
      <td><label>Google+:</label><input type="url" name="googleplus" value="<?php print "$xmluserspersonaldetails->googleplus";?>"/></td>
    </tr>
    <tr>
      <td><label>Facebook:</label><input type="url" name="facebook" value="<?php print "$xmluserspersonaldetails->facebook";?>"/></td>
      <td><label>Eskimi:</label><input type="url" name="eskimi" value="<?php print "$xmluserspersonaldetails->eskimi";?>"/></td>
      <td><label>Other Id</label><input type="url" name="otherid" value="<?php print "$xmluserspersonaldetails->otherid";?>"/></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Mobile Network Communication Column</strong>
  </p>

  </p>
  <table width="93%" border="0">
    <tr>
      <td><label><font color='red'>*</font>Mobile Number:</label>
        <span id="sprytextfield9">
        <input type="text" name="mobilenumber" id="mobilenumber" value="<?php print "$xmluserspersonaldetails->mobilenumber";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
     
        </td>
      <td><label>Land Line Number:<br />(with country code)</label><input type="text" name="landlinenumber" value="<?php print "$xmluserspersonaldetails->landlinenumber";?>"/></td>
      <td><label>VOIP Number:</label><input type="text" name="voipnumber" value="<?php print "$xmluserspersonaldetails->voipnumber";?>"/></td>
    </tr>
  </table>
  <p><hr />
  <p><strong>Personal Information Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td width="31%"><label><font color='red'>*</font>Date Of Birth:</label>
       
        <span id="sprytextfield10">
        <input type="text" name="dateofbirth" id="dateofbirth" value="<?php print "$xmluserspersonaldetails->dateofbirth";?>">
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
        
        </td>
      <td width="31%"><label>Zodiac / Astro Sign:</label><input type="text" name="zodiacsign" value="<?php print "$xmluserspersonaldetails->zodiacsign";?>"/></td>
      <td width="31%"><label><font color='red'>*</font>Gender:</label>
        <span id="spryradio1">
        <label>
          <input name="gender" type="radio" id="gender" value="male" <?php if($xmluserspersonaldetails->gender == "male"){ print "checked='CHECKED'"; }?>>
          male</label>
        <br>
        <label>
          <input type="radio" name="gender" value="female" id="gender" <?php if($xmluserspersonaldetails->gender == "female"){ print "checked='CHECKED'"; }?>>
          female</label>
        <br>
        <span class="radioRequiredMsg">Please make a selection.</span></span>
<label>
          
        <br>
      
       </td>
    </tr>
  </table>
   <p><hr />
  <p><strong>Likes and Dislikes Column</strong>
  </p>
  <table width="93%" border="0">
    <tr>
      <td><label>Favourite Color:</label><input type="text" name="favcolor" value="<?php print "$xmluserspersonaldetails->favcolor";?>"></td>
      <td><label>Favourite Dress:</label><input type="text" name="favdress" value="<?php print "$xmluserspersonaldetails->favdress";?>"></td>
      <td><label>Favourite Music:</label><input type="text" name="favmusic" value="<?php print "$xmluserspersonaldetails->favmusic";?>"></td>
    </tr>
    <tr>
      <td><label>Favourite Game:</label><input type="text" name="favgame" value="<?php print "$xmluserspersonaldetails->favgame";?>"></td>
      <td><label>Favourite Dish:</label><input type="text" name="favdish" value="<?php print "$xmluserspersonaldetails->favdish";?>"></td>
      <td><label>Favourite Book:</label><input type="text" name="favbook" value="<?php print "$xmluserspersonaldetails->favbook";?>"></td>
    </tr>
    <tr>
      <td><label>Favourite Actor:</label><input type="text" name="favactor" value="<?php print "$xmluserspersonaldetails->favactor";?>"></td>
      <td><label>Favourite Sports Person:</label><input type="text" name="favsportsperson" value="<?php print "$xmluserspersonaldetails->favsportsperson";?>"></td>
      <td><label>More Interest About:</label><input type="text" name="moreinterestabout" value="<?php print "$xmluserspersonaldetails->moreinterestabout";?>"></td>
    </tr>
    <tr>
      <td><label>Things you like mostly:</label><input type="text" name="thingsyoulikemostly" value="<?php print "$xmluserspersonaldetails->thingsyoulikemostly";?>"></td>
      <td><label>Funniest moment in your life:</label><input type="text" name="funniestmoment" value="<?php print "$xmluserspersonaldetails->funniestmoment";?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Dislike dish:</label><input type="text" name="dislikedish" value="<?php print "$xmluserspersonaldetails->dislikedish";?>"></td>
      <td><label>Dislike things:</label><input type="text" name="dislikethingst" value="<?php print "$xmluserspersonaldetails->dislikethingst";?>"></td>
      <td><label>Crazy about things like:</label><input type="text" name="crazyaboutthings" value="<?php print "$xmluserspersonaldetails->dislikethingst";?>"></td>
    </tr>
    <tr>
      <td><label>Any other dislike:</label><input type="text" name="anyotherdislikes" value="<?php print "$xmluserspersonaldetails->anyotherdislikes";?>"></td>
      <td></td>
      <td></td>
    </tr>
  </table>
   <p><hr />

  <p><strong>Goals and Inspirations Column</strong>
  </p>
  
  <table width="93%" border="0">
    <tr>
      <td><label>Life ambition:</label><input type="text" name="lifeambition" value="<?php print "$xmluserspersonaldetails->lifeambition";?>"/></td>
      <td><label>Inspired by:</label><input type="text" name="inspiredby" value="<?php print "$xmluserspersonaldetails->inspiredby";?>"/></td>
      <td><label>Your role model:</label><input type="text" name="yourrolemodel" value="<?php print "$xmluserspersonaldetails->yourrolemodel";?>"/></td>
    </tr>
  </table>
   <p><hr />
  <p><strong>About You Column</strong>
  </p>
   <table width="94%" height="108" border="0">
    <tr>
      <td><label><font color='red'>*</font>About Your Self:</label>
        <span id="sprytextarea1">
        <textarea name="aboutyou" id="aboutyou"   style="width:100%;" ><?php print "$xmluserspersonaldetails->aboutyou"; ?></textarea>
        <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span>
   
        
      </td>
     </tr>
    </table>
  <p>&nbsp;</p>
<div><input type="submit" class="submit" value="submit" name="predefineyourdata" /></div>
</DIV></FORM>

<center>


<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {minChars:3});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {minChars:5});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {minChars:3});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {minChars:3});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {minChars:2});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "integer", {minChars:5, maxChars:6});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email", {useCharacterMasking:true});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "phone_number", {useCharacterMasking:true});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "date", {useCharacterMasking:true, format:"dd/mm/yyyy"});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {minChars:10, maxChars:300, counterId:"countsprytextarea1", counterType:"chars_remaining"});
</script>
</body>
</html>

<?php
$xmluserspersonaldetails->asXML('userspersonaldetails/' . $slambook_name . '.xml');
?>

<?php
echo "</div></div> <!-- /container -->";
include 'footer.php';

		
				
	
?>