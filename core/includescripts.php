<?php /*  */php?>

<?php
//$navmenufile = "http://localhost/classes/menu/NavigationMenu.php";
php?>



<?php
//
// create menu object
//
include $navmenufile;
$navMenu = new NavigationMenu();
php?>

<SCRIPT LANGUAGE = "JavaScript">
	function checkDetails() {
		var x = document.feedback.email.value;
		var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (document.feedback.email.value) {
			if (filter.test(x)) {
				return true;
			}
			else {
				alert('Please enter a valid email address');
				document.feedback.email.focus();
				return false;
			}
		}
		return true;
	}

</SCRIPT>



<!-- website's js files
//<script type="text/javascript" src='<?php print $navMenu->complete_url("jscript/menu.js") ?>'></script>
//<script type="text/javascript" src='<?php print $navMenu->complete_url("js/fadingtext.js") ?>'></script>
-->
<script type="text/javascript" src="../jscript/menu.js"></script>
<script type="text/javascript" src="../js/fadingtext.js"></script>

<!-- statcounter.com -->
<script type="text/javascript" language="javascript">
var sc_project=1585369;var sc_invisible=1;var sc_partition=14;var sc_security="12ecb0e5";</script>
<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c15.statcounter.com/counter.php?sc_project=1585369&amp;java=0&amp;security=12ecb0e5&amp;invisible=1" alt="site stats" border="0"></a> </noscript>

<!-- website css files
//<link rel="stylesheet" type="text/css" href='<?php print $navMenu->complete_url("css/fadingtext.css") ?>'/>
//<link rel="stylesheet" type="text/css" href='<?php print $navMenu->complete_url("css/newlayout.css") ?>'/>
-->
<link rel="stylesheet" type="text/css" href="../css/fadingtext.css"/>
<link rel="stylesheet" type="text/css" href="../css/newlayout.css"/>



<script type="text/javascript"><!--
google_ad_client = "pub-5210534993165339";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_type = "text";
//2006-12-14: cafe4java.com
google_ad_channel = "8535670698";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "cc0033";
google_color_text = "000000";
google_color_url = "008000";
//--></script>
