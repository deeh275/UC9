<?php

/*com o metodo post, geralmente usa-se o cURL.
Geralmente usado no php para efetuar requisições em APIs
*/
$curl = curl_init();
curl_setopt_array($curl,[
    CURLOPT_URL => 'http://localhost/UC9/metodo/metodo_post', // A URL relativamente a qual pretendemos obter informação
    CURLOPT_RETURNTRANSFER => true, // retorna o valor em formato de string
    CURLOPT_CUSTOMREQUEST => 'post', // o método HTTP vai caracterizar o pedido
    CURLOPT_POSTFIELDS => array('valor1' => '10', 'valor2' => '20') //processa os valores do array
]);

$response = curl_exec($curl);
curl_close($curl);

$dados = json_decode($response);
echo '<pre>';
print_r($dados);





?>