<?php

try {

    $destino = dirname(__FILE__) . '/deposito/';

    if(!is_dir($destino))
        throw new Exception("Pasta de destino não encontrada.");

    if(is_executable($_FILES['arquivo_up']['tmp_name'])) 
        throw new Exception("Arquivos executáveis não são permitidos");   


    $nome_aleatorio = uniqid("up_");

    $ext = pathinfo($_FILES['arquivo_up']['name'], PATHINFO_EXTENSION);

    $nome_no_deposito = $destino . $nome_aleatorio . "." . $ext; 

    if(move_uploaded_file($_FILES['arquivo_up']['tmp_name'], $nome_no_deposito))
        echo "Enviado com sucesso!";
    else
        throw new Exception("Erro ao mover o arquivp upado.");

} catch (Exception $e) {

    echo "Deu erro: " . $e->getMessage();
}