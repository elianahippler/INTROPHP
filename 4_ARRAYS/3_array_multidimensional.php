<?php
    $carros = array (
        
        '2010' => array (
            'fiat' => 'Bravo',
            'ford' => 'Novo Focus',
            'renoult' => 'Duster'
        ),

        '2015' => array (
            'bmw' => 'x3',
            'chevrolet' => 'S10 Hight country',
            'ford' => 'Edge'
        ),

        '2020' => array (
            'chevrolet' => 'Onix plis',
            'nissan' => 'Versa',
            'volkswagen' => 'Novo Nivus'
        ) 
    );

    echo "o Lançamento do {$carros['2020']['chevrolet']} foi em 2020";

?>