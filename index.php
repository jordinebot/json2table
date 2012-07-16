<?php 

	$json11_url = "https://graph.facebook.com/10151021544704634/comments?value=1&redirect=1&limit=1000";
	$json12_url = "https://graph.facebook.com/10151076238995519/comments?value=1&redirect=1&limit=1000";
	$json13_url = "https://graph.facebook.com/10150956342733212/comments?value=1&redirect=1&limit=1000";


	// Initializing curl
	$ch = curl_init( $json13_url );
	 
	// Configuring curl options
	$options = array(
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
	);
	 
	// Setting curl options
	curl_setopt_array( $ch, $options );
	 
	// Getting results
	$result =  curl_exec($ch); // Getting jSON result string
	
	// Converting JSON to Array
	$json_array = json_decode($result, true);



?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>JSON 2 Table</title>
</head>

<body>
<table>
<tr>
	<th>Nom</th>
    <th>ID</th>
    <th>Missatge</th>
    <th>Data</th>

</tr>
<?php

	foreach ($json_array['data'] as $item) {
		
		echo "<tr>";
		
		echo "<td>" . $item['from']['name'] . "</td>";
		echo "<td>" . $item['from']['id'] . "</td>";
		echo "<td>" . $item['message'] . "</td>";
		echo "<td>" . $item['created_time'] . "</td>";
		
		
		echo "</tr>";
		
	
	}


?>
</table>
</body>
</html>