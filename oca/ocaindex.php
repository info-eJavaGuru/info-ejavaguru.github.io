<?php
	session_start();
	$relativeDir = "../";

	$basedir = $relativeDir."core/";
	$direct = $relativeDir."dir/";
	$imgDir = $relativeDir."images/";
	$classesDir = $relativeDir."classes/";
	$downloadsDir = $relativeDir."dwnlds/";

	$includescripts = $basedir."includescripts.php";
	$navmenu = $basedir."navmenu.php";
	$logoheader = $basedir."logoheader.php";
	$disclaimer = $basedir."disclaimer.php";
	//$endpagebody = $basedir."endpagebody.php";

	$imgLogo = $imgDir."logo.JPG";
	$bottomBarImg = $imgDir."bottom-250x8.gif";
	$topBarImg = $imgDir."top-250x8.gif";
	$appImg = $imgDir."app1.png";
	$gameImg = $imgDir."game1.png";

	$navmenufile = $classesDir."menu/NavigationMenu.php";
	$mailfile = $classesDir."email";

	$title = "eJavaGuru: Bringing success to you";

	$login = $relativeDir."login/login.php";
	$register = $relativeDir."login/register.php?course=MasterJME";
	$logout = $direct."logout.php";

	$faq = $relativeDir."faq/faqindex.php";

	$footer = $basedir."footer.php";

	$masterjmepdf = $downloadsDir."MasterJME.pdf";

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> <?php print $title ?> </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="SCJP5.0, SCJP 5.0, Training, Courses, Online Learning, Tutor, Mentor">
<META NAME="Description" CONTENT="">
	<?php
	include $includescripts;
	?>

</HEAD>

<body class="oneColLiqCtrHdr">


<div id="container">

	<? php /* HEADER: logo, animated text, Login|Register */ ?>

		<?php
		include $logoheader;
		?>

  <div id="mainContent">

		<?php
		// include "classes/menu/NavigationMenu.php";
		// dynamic menu
		//$navMenu = new NavigationMenu();
		$navMenu->set_CurrentMenu("oca");
		$navMenu->display_menu();
		?>

<? php /*  TABLE 6 (familiar java/ ejava guru can help) */ ?>
<table width="100%">

<tr>
<td valign="top">


<h3>MissionOCAJ7</h3>

<div id="coursedesc">
A focused course designed for the Java programmers, MissionOCAJ7 is your coach to prepare for the ‘Oracle Certified Associate Java SE 7 Programmer I’ certification exam. This course will equip you with the techniques to make a successful jump into the category of certified Java professionals and be present as a safety net to save you from any hard falls. The goal will be to cover the skill gaps and arm students to approach OCA JP7 with confidence.
</div>

<div id="coursedesc">
Developed by Mala Gupta, author of Manning’s best seller ‘OCA Java SE 7 Programmer I Certification Guide’, the course includes a hands-on project, which covers all exam objectives. It also includes multiple quizzes, sample exam questions, images, and explanations to reinforce key concepts.
</div>

<div id="coursedesc">
A structured 12 weeks course, it includes weekly audio or video conference calls to connect with your mentor. Access the <a href="MissionOCA-JAVA-7.pdf">detailed course description</a>.
</div>

<div id="coursedesc">
Introductory price: 399 USD
</div>

<div id="coursedesc">
To register for the course, send a message to ocajp7 dot eJavaGuru at gmail.com with your brief IT background information.
</div>













</td>


<td height="430px" valign="top" align="right">

    <img align="center" class="sidebarBoxTop"
src="<?php print $topBarImg ?>" width="250" height="10"
alt="" />
    <div class="sidebarBox">
    	<h4>Home Based Learning</h4>
        <ul>
	        <li>Personal mentors</li>
   	        <li>Weekly audio or video calls with your mentor</li>
			<li>Hands-on project</li>
			<li>4 Full mock exams</li>
        </ul>
	</div>
<img class="sidebarBoxBottom"
src="<?php print $bottomBarImg ?>" width="250"
height="8" alt="" align="top" />







</td>
</tr>
</table>

	<!-- end #mainContent --></div>

  	<?php
  	include $footer;
  	?>

<!-- end #container --></div>
</body>
</HTML>