<?php
function calculaAnos($ano1, $ano2){
    return ($ano1*365) - ($ano2*365);
}

function calculaMeses($mes1, $mes2){
    return ($mes1 * 30) - ($mes2 * 30);
}

function calculaDias($dia1, $dia2){
    return $dia1 - $dia2;
}

function calculaBissexto(){
    $bissexto = 0;
    $ano = date('Y');
    
    while($ano >= $_POST['ano']){
        if(($ano % 4 == 0) || ($ano % 400 == 0)){
            $bissexto += 1;
        }
        $ano -= 1;
    }
    return $bissexto;
}

if(isset($_POST['enviar'])){
$dias = array(date('j'),$_POST['dia']);
$meses = array(date('n'),$_POST['mes']);
$anos = array(date('Y'),$_POST['ano']);

$total = calculaAnos($anos[0],$anos[1]) + 
        calculaMeses($meses[0],$meses[1])+ 
        calculaDias($dias[0],$dias[1]) + 
        calculaBissexto();
}
?>