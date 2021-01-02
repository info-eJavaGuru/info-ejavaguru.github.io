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
A focused course designed for the Java programmers aiming to earn the Oracle Certified Associate Java SE 7 Programmer I certification.
</div>

<div id="coursedesc">
The goal will be to cover the skill gaps and arm students to approach SCJP with confidence.
Course will not cover lengthy explanations for topics familiar to Java programmers.
</div>

<div id="coursedesc">
Course starts with caliberating student's current Java skill level and customises to individual needs.
A topic can be marked as special focus or excluded altogether, as required.
</div>

<div id="coursedesc">
This course is offered in 2 options:
<ul>
<li>Regular track: SLA driven 3 months tutor support, where student is expected to put on approximately 15 hours per week in study.</li>
<li>Fast track: SLA driven 2 months tutor support, where you are expected to put on approximately 22 hours per week in study.</li>
</ul>
</div>

<div id="coursedesc">
Introductory price: <b>99 USD</b>
</div>



<div id="coursedesc">
Available for <a href="../examobj310-055.php">SCJP 5.0 (310-055)</a> track.
</div>

<div id="coursedesc">
Click <a href="<?php print $register?>">here</a> to register and receive more information on this course. </font>
</div>


<p>












</td>


<td height="430px" valign="top" align="right">

    <img align="center" class="sidebarBoxTop"
src="<?php print $topBarImg ?>" width="250" height="10"
alt="" />
    <div class="sidebarBox">
    	<h4>Home Based Learning</h4>
        <ul>
	        <li>Personal mentors</li>
			<li>Hands-on exercises</li>
			<li>Live project for your Java enabled Mobile Phone</li>
			<li>Comprehensive explanations</li>
			<li>Performance tuning for constrained devices</li>
			<li>Protect your network data</li>
        </ul>
	</div>
<img class="sidebarBoxBottom"
src="<?php print $bottomBarImg ?>" width="250"
height="8" alt="" align="top" />



    <img align="bottom" class="sidebarBoxTop"
	src="<?php print $topBarImg ?>" width="250" height="10"
alt="" />
    <div class="sidebarBox">
    	<h4>Quick Links</h4>
        <ul>
	        <li><a href="<?php print $faq?>">FAQ</a></li>
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