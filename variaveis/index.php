<?php

try {

    echo "Teste de variáveis";

    echo "<br />";

    if(isset($_GET['nome']))
    {
        if(!empty($_GET['nome']))
        {
            if(strlen($_GET['nome']) >= 3)
                echo "Nome é: " . $_GET['nome'];
            else
                throw new Exception("Nome não preenchido corretamente, pelo menos 3 letras.");
        } else
            throw new Exception("Nome não preenchido.");
    } else 
        throw new Exception("Nome não encontrado");


    echo "<br />";


    if(isset($_GET['idade']))
    {
        $idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);

        if($idade)
            echo "Idade é: " . $idade;
        else 
            throw new Exception("Idade não é válida.");
    } else 
        throw new Exception("Idade não encontrado");

    
    echo "<br />";


    if(isset($_GET['email']))
    {
        $email = filter_var($_GET['email'], FILTER_VALIDATE_EMAIL);

        if($email)
            echo "seu email é: " . $email;
        else 
            throw new Exception("Digite um email válido.");
    } else 
        throw new Exception("Informe o e-mail");





} catch(Exception $e) {
    echo "Deu erro: " . $e->getMessage();
}


