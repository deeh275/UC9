<?php
//Existem duas funçoes fundamentais no php para tratar JSON.
//Uma para criar dados no formato JSON.
//Outra transformar doados de for,ato JSON em PHP (arrays)
 

//transformando arrays em JSON

$dados = [
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina',
];
echo '<pre>';
//json_encode transforma um array em uma string JSON 

echo json_encode($dados);
 ?>