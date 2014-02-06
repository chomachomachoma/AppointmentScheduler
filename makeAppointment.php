<?php

require('config.php');

/*insert data variable declaration*/ 

$StoreID = $_POST['StoreID']; 
$Date = $_POST['Date']; 
$Time = $_POST['Time']; 
$Service = $_POST['Service']; 
$OSEstimate = $_POST['OSEstimate']; 
$Notes = $_POST['Notes']; 
$PrevCust = $_POST['PrevCust']; 
$Ref = $_POST['Ref']; 
$Promo = $_POST['Promo'];
$ZipEntered = $_POST['ZipEntered'];  

$StoreID = trim($StoreID);
$Date = trim($Date); 
$Time = trim($Time); 
$Service = trim($Service); 
$OSEstimate = trim($OSEstimate);
$Notes = trim($Notes);
$PrevCust = trim($PrevCust);
$Ref = trim($Ref);
$Promo = trim($Promo); 
$ZipEntered = trim($ZipEntered); 

/*insert data sql*/ 

$insert = mysql_query("INSERT INTO appointments (ID, StoreID, Date, Time, Service, OSEstimate, Notes, PrevCust, Ref, Promo, ZipEntered) VALUES ('', '$StoreID', '$Date', '$Time', '$Service', '$OSEstimate', '$Notes', '$PrevCust', '$Ref', '$Promo', '$ZipEntered')") 
or die ("Could not insert new data :" . mysql_error());

mysql_close($connect);

echo('Data submitted successfully. Redirect to confirmation page.');
?>
