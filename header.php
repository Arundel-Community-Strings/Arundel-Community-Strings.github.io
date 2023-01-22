<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$PageTitle?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta property="og:image" content="https://i.imgur.com/dxnuJMQ.jpg" />
<meta property="og:image:width" content="1201" />
<meta property="og:image:height" content="619" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.arundelstrings.org" />
<meta property="og:title" content="A Beginner Strings Orchestra for Adults" />
<meta property="og:description" content="If you play violin, viola, cello, or bass please consider joining us!" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,print" />
</head>
<body>
<div id="toplinks">
  <div id="toplinksnav">
    <!-- <p>Registration coming soon . . . </p> -->
  </div>
  <!--// end #toplinksnav //-->
</div>
<!--// end #toplinks //-->
<div id="slogan">
  <a href="index.php">
    <!-- <img src="img/ACS_logo.jpg" alt="Arundel Community Strings" height="310" width="839" class="sloganfloat" /> -->
    <img src="img/ACS_wideLogo.png" alt="Arundel Community Strings" height="175" width="1000" class="sloganfloat" />
  </a>
</div>
<!--// end #slogan //-->


<?php
$home_class = "";
$about_class = "";
$join_class = "";
$members_class = "";
$contact_class = "";
if ($nav_focus == "about"): //$nav_focus passed in
  $about_class = "class=\"now\"";
elseif ($nav_focus == "join"):
  $join_class = "class=\"now\"";
elseif ($nav_focus == "members"):
  $members_class = "class=\"now\"";
elseif ($nav_focus == "home"):
  $home_class = "class=\"now\"";
elseif ($nav_focus == "contact"):
  $contact_class = "class=\"now\"";
endif;

$navbarTxt = <<<NAV
<div id="navbar">
  <div id="navbarblock">
    <ul>
      <li><a href="index.php" $home_class>Home</a></li>      
      <li><a href="about.php" $about_class>About</a></li>      
      <li><a href="join.php" $join_class>Join</a></li>
      <li><a href="members.php" $members_class>Session Notes</a></li>          
      <li><a href="contact.php" $contact_class>Contact</a></li>      
    </ul>
  </div>
</div>
NAV;
echo $navbarTxt;
?>
