<?php

    /*
    A) Crie o cadastro do cliente e armazene os seguintes dados em variáveis: Nome, Idade, Endereço, Email.
    B) Verifique se cada cliente é de idade maior. Se for maior que 17 anos escreva "O cliente 'NOME' é de maior"
    */

    #Cliente:

    $nome = "Eliana";
    $idade = 18;
    $endereco = "Rua Santos Dummont 1585, apto 6";
    $email = "elianahippler@gmail.com";

    if($idade > 17){
        echo "O Cliente $nome é maior de idade.";
    } else {
        echo "O Cliente $nome não é maior de idade";
    }
    
?>