<?php
	ini_set("include_path", $mailfile);
	require("class.phpmailer.php");
?>

  <div id="header">
	<table width="100%">
	<tr width="100%">
		<td width="100%">
			<img align="left" src="<?php print $imgLogo ?>"></img>
			<h4 style="margin-left: 250px;" > <div id="divNewsCont"><div id="divNews" align="center">&nbsp;</div></div></h4>


			<?php
			if( isset($_SESSION['email']) ) {
			?>
					<h4 align="right" valign="top">Welcome, <?php print $_SESSION['email'] ?> | <a href="<?php print $logout ?>">Logout</a></h4>
			<?php
			}
			else {
			?>
					<h4 align="right" valign="top"><a href="<?php print $login ?>">Login</a> | <a href="<?php print $register ?>">Register</a></h4>
			<?php
			}
			?>


		</td>
	</tr>
	</table>
	<!-- end #header -->
</div>
