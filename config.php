<?php

/*server & db connection variables*/ 

$dbhost = 'localhost'; 
$dbuser = ''; 
$dbpass = ''; 
$dbname = ''; 

/*server connection*/ 

$connect = mysql_connect("$dbhost", "$dbuser", "$dbpass") 
or die ("Could not connect to server :" . mysql_error()); 

/*db select*/ 

$db = mysql_select_db("$dbname", $connect) 
or die ("Could not select db :" . mysql_error()); 

?>