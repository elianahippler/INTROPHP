<?php
    /*estrutura de repetição para trabalhar com arrays*/

    $mendes = array(
        "Teste 1, ",
        "Teste 2, ",
        "Teste 3"
    );

    foreach($mendes as $view){
        echo $view;
    }
    
?>

<hr>

<?php
    $meses = array(
        'Janeiro' => 1,
        'Fevereiro' => 2, 
        'Março' => 3,
        'Abril' => 4,
        'Maio' => 5,
        'Junho' => 6,
        'Julho' => 7,
        'Agosto' => 8,
        'Setembro' => 9,
        'Outubro' => 10,
        'Novembro' => 11,
        'Dezembro' => 12,
    );

    foreach($meses as $chave => $valor){
        echo ' O mês ' . $chave . ' é ' . $valor . ' <br>';
    }
?>