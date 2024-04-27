<?php
    $estacao = array (
        'verao' => ' de 21 de dezembro a 21 de março',
        'outono' => ' de 21 de marco a 20 de junho ',
        'inverno' => ' de 21 de junho a 23 de setembro',
        'pimavera' => ' de 21 de setembro a 21 de dezembro' 
    );

    echo "A estação Verão foi: {$estacao['verao']}";
    
    // concatenando
    echo "<br> A estação Outono foi: " . $estacao['outono'];
?>