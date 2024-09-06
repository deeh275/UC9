<?php

$balão_magico = [
    'nome' => 'Balão mágico',
    'Cor' => 'preto',
    'Tamanho' => 'Grande'
];


$carros_corrida = [
    'Marca' => 'MCLAREN',
    'nome' => 'P1',
    'Cor' => 'Azul'
];

$bonecas = [
    'tipo' => 'Boneca',
    'nome' => 'chuck',
    'Cor' => 'Azul',
    'tamanho' => 'pequeno'
];

$carteado = [
    'tipo' => 'cartas',
    'nome' => 'Baralho',
    'Cor' => 'Branco',
    'tamanho' => 'pequeno'
];

$tabuleiro = [
    'tipo' => 'Tabuleiro',
    'nome' => 'Xadrez',
    'Cor' => 'Preto,Branco',
    'tamanho' => 'pequeno'
];
echo '<pre>';

echo json_encode($balão_magico, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo json_encode($carros_corrida, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo json_encode($bonecas, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo json_encode($tabuleiro, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo json_encode($carteado, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
