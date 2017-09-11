<?php
// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('cadastro.json');
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);
 
// Loop para percorrer o Objeto
foreach($json as $registro){
    echo 'Código: ' . $registro->codigo . ' - Nome: ' . $registro->nome . ' - email: ' . $registro->email . '<br>';
}

echo '<br>';
// Atribui o conteúdo do arquivo para variável $arquivo
$arquivo = file_get_contents('contatos.json');
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($arquivo);
 
// Loop para percorrer o Objeto
foreach($json->Contatos as $registro):
    echo 'Código: ' . $registro->codigo . ' - Nome: ' . $registro->nome . '<br>';
    echo 'Telefone Residência: ' . $registro->telefones->residencial . ' - Telefone Celular: ' . $registro->telefones->celular . '<br>';
endforeach;

?>