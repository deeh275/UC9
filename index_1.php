<?php
// Existem duas funções fundamentais no PHP para tratar JSON.
// Uma para criar dados no formato JSON.
// Outra para transformar dados do formato JSON em PHP (arrays).

// Transformando arrays em JSON

$dados = [
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina',
    'Conceição',
];

echo '<pre>';
// json_encode transforma um array em uma string JSON
echo json_encode($dados);

echo '<hr>';

echo json_encode($dados, JSON_PRETTY_PRINT);

echo '<hr>';
// Acentuação legível
echo json_encode($dados, JSON_UNESCAPED_UNICODE);

echo '<hr>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Associação por JSON
$dadoss = [
    'administrador' => 'João Ribeiro',
    'secretaria' => 'Carla Santos',
    'diretor_geral' => 'Márcio Silva',
    'oficial_contas' => 'Fernanda Correia',
];

echo json_encode($dadoss, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
<script>
   
    let dadoss = JSON.parse('<?=(json_encode($dadoss, JSON_UNESCAPED_UNICODE)) ?>');
    // Apresentação dos dados como objeto
    console.log(dadoss);

    //tabela
    console.table(dadoss);

    //individual
    console.log(dadoss.administrador);
</script>
