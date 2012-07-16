<?php

    /**
     * Get a remote JSON and return it
     *
	 * @param String with URL
     * @return JSON
     */
	function get_json( $url ) {
		$ch = curl_init( $url );
		$options = array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
		);
		curl_setopt_array( $ch, $options );
		$result =  curl_exec($ch);
		return $result;	
	}

    /**
     * Get a remote JSON and return it as an associative array
     *
	 * @param String with URL
     * @return Associative array
     */	
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