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
		$navMenu->set_CurrentMenu("about");
		$navMenu->display_menu();
		?>

<? php /*  TABLE 6 (familiar java/ ejava guru can help) */ ?>
<table width="100%">
<tr>
<td valign="top">


<h3> About us</h3>




<h4>Why distance learning?</h4>

<br>
<div id="headingdesc">
Distance learning is a great way to build skills and enhance qualification along with your present jobs. You can do it from the privacy of your own home as technology continues to evolve, making computers and the Internet available to almost everyone. At the same time one should remember, you get out what you put in, so even distance learning requires dedication.
</div>

<p>
<h4>Limitations of Self Study / Online courses</h4>
<br>

<div id="headingdesc">
All popular models of online training like CBTs, online tutorials, even books etc. rely on the student's self monitoring during the study process. It is proven by research that in self learning or distance learning courses, the course completion rate is poor.
</div>

<div id="headingdesc">One reason for this is that the training provider loses touch with the student which leads to students losing interest in the course. The missing point is the presence of a mentor like in a classroom. If one is able to provide a mentor who is always available to answer student's minutest of queries, perform assessments regularly, evaluate examination and projects, then the drop out rate can be cut drastically.
</div>

<p>
<h4>Our role</h4>
<br>


<div id="headingdesc">
We provide mentors with our courses, who carry standard industry certifications. These mentors provide SLA based support to students.
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
			<li>Assessed assignments</li>
			<li>Continual progress assessment</li>
			<li>Comprehensive explanations</li>
			<li>Multiple practice Mock exams</li>
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