<?php 

function SeculoAno($ano){
    $resto = $ano % 100;
    $seculo = $ano / 100;

    if($resto > 0){
        $seculo = $seculo + 1;
        echo "O século do ano $ano é " .number_format($seculo). ".\n";
    } else{
        echo "O século deste ano $ano é $seculo. \n";
    }
}

?>
