<?php

function inverterString($str) {
    $inverted = '';
    $length = strlen($str);
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $inverted .= $str[$i];
    }
    
    return $inverted;
}

$entrada = "Exemplo de string";

$saida = inverterString($entrada);

echo "String original: " . $entrada . "<br>";
echo "String invertida: " . $saida . "<br>";

?>
