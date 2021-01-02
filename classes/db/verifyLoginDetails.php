<?php

phpinfo();


include 'config.php';
include 'opendb.php';

// ... do something like insert or select, etc
// $query  = "CREATE DATABASE eJavaGuruDB";

$query = 'CREATE TABLE contact( '.
         'cid INT NOT NULL AUTO_INCREMENT, '.
         'cname VARCHAR(20) NOT NULL, '.
         'cemail VARCHAR(50) NOT NULL, '.
         'csubject VARCHAR(30) NOT NULL, '.
         'cmessage TEXT NOT NULL, '.
         'PRIMARY KEY(cid))';

$result = mysql_query($query);


$result = mysql_query($query);

echo $result;

include 'closedb.php';
?>
