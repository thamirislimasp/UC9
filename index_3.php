<?php

// A função json_decode permite a operação contrária, ou seja, partindo de um JSON, deixando a coleção operável em PHP.

$json = '["João", "Ana", "Carlos", "Martin"]';
$nome = json_decode ($json);

echo '<pre>';

print_r($nome);

$json = '{
    "administrador" : "João Ribeiro",
    "secretária" : "Carla Santos",
    "diretor_geral" : "Márcio Silva",
    "oficial_contas" : "Fernada Correia",
    "colaboradores" : {
        "chefe" : "Antônio Daniel",
        "coordenador_1" : "Marta",
        "coordenador_2" : "Marisa",
        "coordenador_3" : "Francisco"
    }
}';

$dados_empresa = json_decode ($json, true);

echo '<pre>';

print_r($dados_empresa);

?>