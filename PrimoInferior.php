<?php

function PrimoInferior(int $num){
    if($num < 0){
        echo "0";
    } else{
        for($i = 1; $i <= $num; $i++){
            $divisores = 0;
            
            for($j = $i; $j >= 1; $j--){
                if (($i % $j) == 0){
                    $divisores++;
                }
            }
            if ($divisores == 2){
                $maiorPrimo = $i;
            }
        }
        echo $maiorPrimo;
    }
}

?>

