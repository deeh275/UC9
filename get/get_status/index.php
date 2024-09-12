<?php

//set o conteúdo da API
header("content-type:application/json; charset=utf-8");

$response['status'] = 'API animais está em execução'; //animals API is running!
$response['time_response'] = time();

echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>