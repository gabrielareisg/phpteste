<?php

    $array = [10,5,8,10,8,5,3,9,6,3,4,6,3,1,10,1,10,3,7,1];

    $frequencia = array_count_values($array);    
      
    arsort($frequencia);
      
    $novo_array = array_keys($frequencia);

    $quantidade = max($frequencia);

    echo "O número que mais se repete é o:"." ".$novo_array[0]. ". Ele se repete ". $quantidade . " vezes.";

?>
