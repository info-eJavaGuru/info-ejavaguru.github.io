<?php
// Check for a cookie, if none go to login page
if(!isset($HTTP_COOKIE_VARS['user_id']) || !isset($_SESSION['email']) ) {
header('Location: Login.php?refer='.urlencode($PHP_SELF.'?'.$HTTP_SERVER_VARS['QUERY_STRING']));
}
// Try to find a match in the database
$sGUID = $HTTP_COOKIE_VARS['session_id'];
$hDB = mysql_connect('server', 'username', 'password');
mysql_select_db('database', $hDB);
$sQuery = "
Select iUser
From tblUsers
Where sGUID = '$sGUID'";
$hResult = mysql_query($sQuery, $hDB);
if(!mysql_affected_rows($hDB)) {
// No match for guid
header('Location: Login.php?refer='.urlencode($PHP_SELF.'?'.$HTTP_SERVER_VARS['QUERY_STRING']));
}
?>