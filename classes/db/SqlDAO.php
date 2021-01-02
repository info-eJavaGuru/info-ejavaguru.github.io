<?php
 class SqlDAO {

	var $connection;
	var $dbhost = 'localhost';
	var $dbuser = 'ejavaguru';
	var $dbpass = 'ejavaguru';
	var $dbname = 'ejavagurudb';

	function openDBConnection () {
		$this->connection = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db("ejavagurudb");

		if (!$this->connection || !mysql_select_db($dbname, $this->connection)) {
	       	return $this->error('Error connecting to selected DB');
	    } else {
       		return $this->connection;
     	}
	}

	function checkLoginCredentials($username, $password) {
		$return_result = "-1";
		$query = 'SELECT first_name, last_name, email FROM ejg_reg_users WHERE binary username="';
		$query = $query.$username;
		$query = $query.'" AND binary password="';
		$query = $query.$password;
		$query = $query.'";';

		//print $query;
		$query_result = mysql_query($query, $this->connection);


		if ($row = mysql_fetch_array($query_result, MYSQL_ASSOC))
		{
			$return_result = array
			(
			 $row['first_name'].' '.$row['last_name'],
			 $row['email']
			);

			//$return_result = $row['first_name'].' '.$row['last_name'].'$row['last_name'];
			//$return_result = 1;
		}
		mysql_free_result($query_result);

		return $return_result;

		/*
		if(!$query_result){
			return $this->error();
		}else{
			return $query_result;
		}
		*/
	}

	function registerUser(	$username, $password,
							$firstname,	$surname, $email, $address1, $address2,
							$city, $state, $postalcode, $country,
							$hear, $profession, $examtarget) {
		$return_result=-1;
		//$query = 'SELECT 1 FROM ejg_reg_users WHERE binary username="';
		//$query = $query.$username;

		//print $query;
		//$query_result = mysql_query($query, $this->connection);

		//if ($row = mysql_fetch_array($query_result, MYSQL_NUM))
		//{
			// duplicate username
		//	$return_result = 1;
		//}
		//mysql_free_result($query_result);

		//if ($return_result != 1) {

			$query = "INSERT INTO ejg_reg_users (reg_no, reg_datetime, username, password, firstname, surname, address1, address2, city, state, postalcode, country, hear, profession, examtarget) VALUES ('".$username."', '".$password."')";

			mysql_query($query) or $return_result=0;
				//die('Error, insert query failed');

			$query = "FLUSH PRIVILEGES";
			mysql_query($query) or $return_result=0;
				//die('Error, insert query failed');


			if ($return_result==-1) $return_result=1;

		//}

		return $return_result;
	}

	function registerUserOnlyUsername(	$username, $password) {
		$return_result=-1;
		//$query = 'SELECT 1 FROM ejg_reg_users WHERE binary username="';
		//$query = $query.$username;

		//print $query;
		//$query_result = mysql_query($query, $this->connection);

		//if ($row = mysql_fetch_array($query_result, MYSQL_NUM))
		//{
			// duplicate username
		//	$return_result = 1;
		//}
		//mysql_free_result($query_result);

		//if ($return_result != 1) {

			$query = "INSERT INTO ejg_reg_users (username, password) VALUES ('".$username."', '".$password."')";

			mysql_query($query) or $return_result=0;
				//die('Error, insert query failed');

			$query = "FLUSH PRIVILEGES";
			mysql_query($query) or $return_result=0;
				//die('Error, insert query failed');


			if ($return_result==-1) $return_result=1;

		//}

		return $return_result;
	}

	function registerUser2($username, $password) {
		$query = "INSERT INTO ejg_reg_users (username, password) VALUES ('".$username."', '".$password."')";
		$query_result = mysql_query($query, $this->connection);
		if(!$query_result){
			return $this->error();
		}else{
			return $query_result;
		}
	}

	function error(){
		if(mysql_error() != ''){
			return '<b>MySQL Error</b>: '.mysql_error().'<br/>';
		}
	}

	function closeDBConnection () {
		mysql_close($this->connection);
	}

	var $titleVal = array
	(
	 "Mr",
	 "Mrs",
	 "Miss",
	 "Ms",
	 "Dr",
	 "Prof"
	);

	var $countryVal = array
	(
	   "Afghanistan",
	   "Albania",
	   "Algeria",
	   "American Samoa",
	   "Andorra",
	   "Angola",
	   "Anguilla",
	   "Antarctica",
	   "Antigua and Barbuda",
	   "Argentina",
	   "Armenia",
	   "Aruba",
	   "Austria",
	   "Australia",
	   "Azerbaijan",
	   "Bahamas",
	   "Bahrain",
	   "Baker Island",
	   "Bangladesh",
	   "Barbados",
	   "Belarus",
	   "Belgium",
	   "Belize",
	   "Benin",
	   "Bermuda",
	   "Bhutan",
	   "Bolivia",
	   "Bosnia and Herzegovina",
	   "Botswana",
	   "Bouvet Island",
	   "Brazil",
	   "British Indian Ocean Territory",
	   "British Virgin Islands",
	   "Brunei Darussalam",
	   "Bulgaria",
	   "Burkina Faso",
	   "Burundi",
	   "Cambodia",
	   "Cameroon",
	   "Canada",
	   "Cape Verde",
	   "Cayman Islands",
	   "Central African Republic",
	   "Chad",
	   "Chile",
	   "China",
	   "Christmas Island",
	   "Cocos (Keeling) Islands",
	   "Colombia",
	   "Comoros",
	   "Congo",
	   "Cook Islands",
	   "Costa Rica",
	   "Cote d'Ivoire",
	   "Croatia",
	   "Cuba",
	   "Cyprus",
	   "Czech Republic",
	   "Democratic People's Republic of Korea",
	   "Denmark",
	   "Djibouti",
	   "Dominica",
	   "Dominican Republic",
	   "East Timor",
	   "Ecuador",
	   "Egypt",
	   "El Salvador",
	   "Equatorial Guinea",
	   "Eritrea",
	   "Estonia",
	   "Ethiopia",
	   "Falkland Islands (Malvinas)",
	   "Faroe Islands",
	   "Federated States of Micronesia",
	   "Fiji",
	   "Finland",
	   "France",
	   "French Guiana",
	   "French Polynesia",
	   "French Southern Territories",
	   "Gabon",
	   "Gambia",
	   "Georgia",
	   "Germany",
	   "Ghana",
	   "Gibraltar",
	   "Greece",
	   "Greenland",
	   "Grenada",
	   "Guadeloupe",
	   "Guam",
	   "Guatemala",
	   "Guinea",
	   "Guinea-Bissau",
	   "Guyana",
	   "Haiti",
	   "Heard Island and McDonald Islands",
	   "Holy See (Vatican City State)",
	   "Honduras",
	   "Hong Kong",
	   "Howland Island",
	   "Hungary",
	   "Iceland",
	   "India",
	   "Indonesia",
	   "Iraq",
	   "Ireland",
	   "Islamic Republic of Iran",
	   "Israel",
	   "Italy",
	   "Jamaica",
	   "Jan Mayen",
	   "Japan",
	   "Jarvis Island",
	   "Johnston Atoll",
	   "Jordan",
	   "Kazakstan",
	   "Kenya",
	   "Kingman Reef",
	   "Kiribati",
	   "Kuwait",
	   "Kyrgyzstan",
	   "Lao People's Deomcratic Republic",
	   "Latvia",
	   "Lebanon",
	   "Lesotho",
	   "Liberia",
	   "Libyan Arab Jamahiriya",
	   "Liechtenstein",
	   "Lithuania",
	   "Luxembourg",
	   "Macau",
	   "Madagascar",
	   "Malawi",
	   "Malaysia",
	   "Maldives",
	   "Mali",
	   "Malta",
	   "Marshall Islands",
	   "Martinique",
	   "Mauritania",
	   "Mauritius",
	   "Mayotte",
	   "Mexico",
	   "Midway Islands",
	   "Monaco",
	   "Mongolia",
	   "Mongolia",
	   "Montserrat",
	   "Morocco",
	   "Mozambique",
	   "Myanmar",
	   "Namibia",
	   "Nauru",
	   "Navassa Island",
	   "Nepal",
	   "Netherlands",
	   "Netherlands Antilles",
	   "New Caledonia",
	   "New Zealand",
	   "Nicaragua",
	   "Niger",
	   "Nigeria",
	   "Niue",
	   "Norfolk Island",
	   "Northern Mariana Islands",
	   "Norway",
	   "Oman",
	   "Pakistan",
	   "Palau",
	   "Palmyra Atoll",
	   "Panama",
	   "Papua New Guinea",
	   "Paraguay",
	   "Peru",
	   "Philippines",
	   "Pitcairn",
	   "Poland",
	   "Portugal",
	   "Puerto Rico",
	   "Qatar",
	   "Republic of Korea",
	   "Republic of Moldova",
	   "Reunion",
	   "Romania",
	   "Russian Federation",
	   "Rwanda",
	   "Saint Helena",
	   "Saint Kitts and Nevis",
	   "Saint Lucia",
	   "Saint Pierre and Miquelon",
	   "Saint Vincent and the Grenadines",
	   "Samoa",
	   "San Marino",
	   "Sao Tome and Principe",
	   "Saudi Arabia",
	   "Senegal",
	   "Seychelles",
	   "Sierra Leone",
	   "Singapore",
	   "Slovakia",
	   "Slovenia",
	   "Solomon Islands",
	   "Somalia",
	   "South Africa",
	   "South Georgia and the South Sandwich Islands",
	   "Spain",
	   "Sri Lanka",
	   "Sudan",
	   "Suriname",
	   "Svalbard",
	   "Swaziland",
	   "Sweden",
	   "Switzerland",
	   "Syrian Arab Republic",
	   "Taiwan, Province of China",
	   "Tajikistan",
	   "Thailand",
	   "The former Yugoslav Republic of Macedonia",
	   "Togo",
	   "Tokelau",
	   "Tonga",
	   "Trinidad and Tobago",
	   "Tunisia",
	   "Turkey",
	   "Turkmenistan",
	   "Turks and Caicos Islands",
	   "Tuvalu",
	   "U.S. Virgin Islands",
	   "Uganda",
	   "Ukraine",
	   "United Arab Emirates",
	   "United Kingdom",
	   "United Republic of Tanzania",
	   "United States",
	   "Uruguay",
	   "Uzbekistan",
	   "Vanuatu",
	   "Venezuela",
	   "Viet Nam",
	   "Wake Island",
	   "Wallis and Futuna",
	   "Western Sahara",
	   "Yemen",
	   "Yugoslavia",
	   "Zaire",
	   "Zambia",
	   "Zimbabwe"
	);




}

php?>