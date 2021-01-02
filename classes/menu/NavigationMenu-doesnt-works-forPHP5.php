<?php
 class NavigationMenu {

	var $protocol = "http://";
	var $servername;
	var $currentMenu;
	//var $menuItemsLink;

	var $menuLoginLink = "/login/login.php?id=-105";
	var $menuLoginText = "Login";

	var $menuRegisterLink = "/register/register.php?id=-107";
	var $menuRegisterText = "Register";


	var $menuItems = array
	(
		"home",
		"benefits",
		"howwework",
		"android",
		"oca",
		"resources",
		"faq",
		"contactus",
		"aboutus"
	);

	var $menuItemsText = array
	(
		"Home",
		"Benefits",
		"How We Work",
		"Android",
		"OCA/OCP Java SE 7",
		"Resources",
		"FAQ",
		"Contact Us",
		"About Us"
	);

	var $footerMenuItems = array
	(
		"home",
		"contactus",
		//"sendfeedback",
		"disclaimer"
	);

	var $footerMenuItemsText = array
	(
		"Home",
		"Contact Us",
		//"Send Feedback",
		"Disclaimer"
	);

	var $menuItemsLink = array
	(
		"/index.php",
		"/dir/benefits.php",
		"/dir/howwework.php",
		"/android/androidindex.php",
		"/oca/ocaindex.php",
		"/resources/reslist.php",
		"/faq/faqindex.php",
		"/dir/contactus.php",
		"/dir/about.php"
	);

	var $footerMenuItemsLink = array
	(
		"/index.php",
		"/dir/contactus.php",
		//"/feedback/sendfeedback.php",
		"/dir/disclaimer.php"
	);

	function set_CurrentMenu ($currMenu) {
		$this->currentMenu = $currMenu;
	}

    /**
    <ul id="foldertab" style="margin-top: 4px; margin-bottom: 0px; padding-top: 0;">
		<li><a  id="viewPageLink"  href="www.ejavaguru.com"  class="current"    accessKey="v">Home</a></li>
		<li><a  id="viewPageLink"  href="#"  >Benefits</a></li>
		<li><a  id="viewPageLink"  href="#"  >How we Work</a></li>
		<li><a  id="viewPageLink"  href="#" >SCJP 5.0</a></li>
		<li><a  id="viewPageLink"  href="#" >Free Resources</a></li>
		<li><a  id="viewAttachmentsLink"  href="#"  >FAQ</a></li>
		<li><a  id="viewPageLink"  href="#"  >Contact Us</a></li>
		<li><a  id="viewPageLink"  href="#"  >About Us</a></li>
	</ul>
	**/

	function display_menu () {

		//echo "server". $SERVER[SERVER_NAME];

		$counter = 0;
		$arrayLength = 8;

		echo '<ul id="foldertab" style="margin-top: 4px; margin-bottom: 0px; padding-top: 0;">';

		while ($counter < $arrayLength) {
			$link = $this->menuItems[$counter];

			if ($link == $this->currentMenu) {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" class=\"current\">";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}
			else {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" >";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}

			$counter = $counter + 1;
		}

		echo "</ul>";
		return true;
	}


	function display_menuWithLogin () {

		//echo "server". $SERVER[SERVER_NAME];

		$counter = 0;
		$arrayLength = 8;

		echo '<ul id="foldertab" style="margin-top: 4px; margin-bottom: 0px; padding-top: 0;">';

		while ($counter < $arrayLength) {
			$link = $this->menuItems[$counter];

			if ($link == $this->currentMenu) {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" class=\"current\">";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}
			else {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" >";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}

			$counter = $counter + 1;
		}

		echo "<li ><a  id=\"viewLoginLink\"  href=\"";
		echo $this->menuLoginLink;
		echo "\" class=\"current\">";
		echo $this->menuLoginText;
		echo "</a></li>";

		echo "</ul>";
		return true;
	}


	function display_menuWithRegister () {

		//echo "server". $SERVER[SERVER_NAME];

		$counter = 0;
		$arrayLength = 8;

		echo '<ul id="foldertab" style="margin-top: 4px; margin-bottom: 0px; padding-top: 0;">';

		while ($counter < $arrayLength) {
			$link = $this->menuItems[$counter];

			if ($link == $this->currentMenu) {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" class=\"current\">";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}
			else {
				echo "<li><a  id=\"viewPageLink\"  href=\"";
				echo $this->menuItemsLink[$counter];
				echo "\" >";
				echo $this->menuItemsText[$counter];
				echo "</a></li>";
			}

			$counter = $counter + 1;
		}

		echo "<li><a  id=\"viewLoginLink\"  href=\"";
		echo $this->menuRegisterLink;
		echo "\" class=\"current\">";
		echo $this->menuRegisterText;
		echo "</a></li>";

		echo "</ul>";
		return true;
	}


	function display_google_ad() {
		echo '<script type="text/javascript"><!--';
		echo "\n";
		echo 'google_ad_client = "pub-5210534993165339";';
		echo "\n";
		echo 'google_ad_width = 120;';
		echo "\n";
		echo 'google_ad_height = 600;';
		echo "\n";
		echo 'google_ad_format = "120x600_as";';
		echo "\n";
		echo 'google_ad_type = "image";';
		echo "\n";
		echo '//2007-01-17: cafe-img-right';
		echo "\n";
		echo 'google_ad_channel = "8372386114";';
		echo "\n";
		echo 'google_color_border = "FFFFFF";';
		echo "\n";
		echo 'google_color_bg = "FFFFFF";';
		echo "\n";
		echo 'google_color_link = "cc0033";';
		echo "\n";
		echo 'google_color_text = "000000";';
		echo "\n";
		echo 'google_color_url = "008000";';
		echo "\n";
		echo '//--></script>';
		echo "\n";
		echo '<script type="text/javascript"';
		echo "\n";
		echo '  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">';
		echo "\n";
		echo '</script>';
		echo "\n";
	}

	function display_footerMenu() {

		function get_full_url($resource) {
			if ($this->servername=="") {
				//echo "NULL..........";
				$this->servername = $_SERVER['SERVER_NAME'];
				$this->protocol = "http://";
			}

			//echo $this->protocol.$this->servername.$resource;
			return $this->protocol.$this->servername.$resource;
		}

		$counter = 0;
		$arrayLength = 3;

		while ($counter < $arrayLength) {
			$link = get_full_url($this->footerMenuItemsLink[$counter]);

			if ($counter == ($arrayLength-1)) {
				echo "<td><a href=". $link . ">". $this->footerMenuItemsText[$counter] . "</a> </td>";
			}
			else {
				echo "<td><a href=". $link . ">". $this->footerMenuItemsText[$counter] . "</a> | </td>";
			}

			$counter = $counter + 1;
		}

	}

	function get_full_url($resource) {
		if ($this->servername=="") {
			//echo "NULL..........";
			$this->servername = $_SERVER['SERVER_NAME'];
			$this->protocol = "http://";
		}

		return $this->protocol.$this->servername.$resource;
	}

	function complete_url($resource) {

		if ($this->servername=="") {

			//echo "NULL..........";

			$this->servername = $_SERVER['SERVER_NAME'];
			if ($this->servername == "localhost") {
				$this->servername = "http://".$this->servername."/";
			}
			else {
				$this->servername = "http://".$this->servername."/";
			}
		}

		return $this->servername.$resource;
	}

}

?>
