<?php
	session_start();

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
		$navMenu->set_CurrentMenu("contactus");
		$navMenu->display_menu();
		?>

<? php /*  TABLE 6 (familiar java/ ejava guru can help) */ ?>
<table width="100%">
<tr>
<td valign="top" width="100%">


<h3> Contact us</h3>

<div id="coursedesc">
<table border=0>

<tr>
<td><div id="coursedesc">MissionOCAJ7 course</div></td>
<td><div id="coursedesc">ocajp7.ejavaguru at gmail.com</td>
</tr>

<tr>
<td><div id="coursedesc">All general queries</div></td>
<td><div id="coursedesc">info.ejavaguru at gmail.com</td>
</tr>

<tr>
<td colspan=2><div id="coursedesc">Like us on <a href="https://www.facebook.com/myEJavaGuru">FaceBook</a></div></td>

</tr>

<?php
/*
<tr><td colspan=2>&nbsp;</td></tr>
*/
?>

<?php
/*
<tr><td colspan=2>&nbsp;</td></tr>
*/
?>


</table>





</td>


<td height="430px" valign="top" align="right">



<!-- removing this section makes the size of the page to shorten -->




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