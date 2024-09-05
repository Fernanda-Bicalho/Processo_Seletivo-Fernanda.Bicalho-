<?php

function pertenceFibonacci($numero) {
  
    $fibonacci = [0, 1];
    
    while (end($fibonacci) < $numero) {
        $fibonacci[] = end($fibonacci) + prev($fibonacci);
    }
    
    if (in_array($numero, $fibonacci)) {
        return "O número $numero pertence à sequência de Fibonacci.";
   
    } else {
        return "O número $numero NÃO pertence à sequência de Fibonacci.";
    }
}

$numero = 21;

echo pertenceFibonacci($numero);

?>