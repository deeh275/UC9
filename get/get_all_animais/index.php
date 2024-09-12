<?php

//set o conteúdo da API
header("content-type:application/json; charset=utf-8");

$response['status'] = 'Sucesso!';
$response['animais'] = require_once('../_data/data.php');
$response['time_response'] = time();

echo json_encode($response, JSON_UNESCAPED_UNICODE);