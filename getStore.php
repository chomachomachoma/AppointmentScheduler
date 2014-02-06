<?php

require('config.php');

//customer ID
$sID = $_GET["id"];

//variable to hold customer info
$sInfo = "";

//create the SQL query string
$sQuery = "Select * from coitlocator where ZipServed=".$sID;
	 
if($sInfo == '') {
	if($oResult = mysql_query($sQuery) and mysql_num_rows($oResult) > 0) {
		$aValues = mysql_fetch_array($oResult,MYSQL_ASSOC);
		$sInfo = "<br />".
		$aValues['Name']."<br />".
		"Phone: ".$aValues['Phone']."<br />".
		"<input type='hidden' name='StoreID' value='".$aValues['StoreID']."' class='{validate:{required:true}}' />".
		"<br />";
	} else {
		$sInfo = "<br />We do not have any locations that serve the zip code you entered.<br /><br />".
		"<input type='hidden' name='StoreID' value='' class='{validate:{required:true}}' />";
	}
}
mysql_close($connect);
?>
<div id="infoToReturn"> <?php echo $sInfo ?> </div>
