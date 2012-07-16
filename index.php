<?php 

	$json11_url = "https://graph.facebook.com/10151021544704634/comments?value=1&redirect=1&limit=1000&offset=0&__after_id=10151021544704634_23455194";

	// Initializing curl
	$ch = curl_init( $json11_url );
	 
	// Configuring curl options
	$options = array(
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
	);
	 
	// Setting curl options
	curl_setopt_array( $ch, $options );
	 
	// Getting results
	$result =  curl_exec($ch); // Getting jSON result string



?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
<?php

print_r($result);


?>

</body>
</html>