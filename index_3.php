<?php

//a função json_decode permite a operação contraria, ou seja partindo de um json, transformando a coleção operavel em php

$json = '["João", "Ana", "Carlos", "Martin"]';

$nome = json_decode($json);
echo '<pre>';

print_r($nome);

$json = '{"administrador" : "João Ribeiro",
         "secretaria" : "carla santos",
         "diretor_geral" : "marcio silva",
         "oficial_contas" : "fernanda correia"
}';

$dados_empresa = json_decode($json, true);

print_r($dados_empresa);
