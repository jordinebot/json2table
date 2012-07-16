<?php

	/* Returns an assoc array with JSON data */
	function get_json_array( $url ) {
		$ch = curl_init( $url );
		$options = array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
		);
		curl_setopt_array( $ch, $options );
		$result =  curl_exec($ch);
		$data = json_decode($result, true);
		return $data;	
	}






?>