<?php
	$relativeDir = "../";

	$basedir = $relativeDir."core/";
	$direct = $relativeDir."dir/";
	$imgDir = $relativeDir."images/";
	$classesDir = $relativeDir."classes/";

	$includescripts = $basedir."includescripts.php";
	$navmenu = $basedir."navmenu.php";
	$logoheader = $basedir."logoheader.php";
	$disclaimer = $basedir."disclaimer.php";
	//$endpagebody = $basedir."endpagebody.php";

	$imgLogo = $imgDir."logo.JPG";
	$bottomBarImg = $imgDir."bottom-250x8.gif";
	$topBarImg = $imgDir."top-250x8.gif";
	$howWeWorkImg = $imgDir."how-it-works.JPG";

	$navmenufile = $classesDir."menu/NavigationMenu.php";
	$mailfile = $classesDir."email";

	$title = "eJavaGuru: Bringing success to you";

	$login = $relativeDir."login/login.php";
	$register = $relativeDir."login/register.php";
	$logout = $direct."logout.php";

	$faq = $relativeDir."faq/faqindex.php";

	$footer = $basedir."footer.php";

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
		$navMenu->set_CurrentMenu("");
		$navMenu->display_menu();
		?>

<? php /*  TABLE 6 (familiar java/ ejava guru can help) */ ?>
<table width="100%">

<tr>
<td width="655px" valign="top">

<h3> Unauthorised Access </h3>


<div id="headingdesc">
You are not authorised to access this resource.
</div>


<div id="headingdesc">
Please <b><a href="<?php print $login ?>">Login</a> | <a href="<?php print $register ?>">Register</a></b> to access the desired resource.
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
			<li>Assessed assignments</li>
			<li>Continual progress assessment</li>
			<li>Comprehensive explanations</li>
			<li>Multiple practice Mock exams</li>
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