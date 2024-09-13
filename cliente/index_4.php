<?php
 
 //formato post 
 
echo '<pre>';
 
$curl = curl_init();
curl_setopt_array($curl,array(
CURLOPT_URL => 'http://localhost/UC9/test_api_1/add_new_client/',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 0,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => array('new_client' => 'Joao'),


));
?>