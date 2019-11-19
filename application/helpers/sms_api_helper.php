<?php
function noto($num, $msg, $address){
    // Account details
	$apiKey = urlencode('lC49pIY0UyE-TuzUuPFSvnifZdj6S34Uyi7kC0j0dZ');
	
    // URL Information
	$pageaddress = $address;
    
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'url' => $pageaddress);
    
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/create_shorturl/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
    
    /* =============================================
    SEND MESSAGE
    ============================================= */
	
	// Message details
	$numbers = array($num);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg . ". " . $pageaddress . " - Team BNM");
	$numbers = implode(',', $numbers);
    
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
}

function forgetPassword($num, $msg){
	// Account details
	$apiKey = urlencode('lC49pIY0UyE-TuzUuPFSvnifZdj6S34Uyi7kC0j0dZ	');
	
	// Message details
	$numbers = array($num);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
}
?>