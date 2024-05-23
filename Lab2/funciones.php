
<?php

function factorialm($num) {

    $facto=1;

    for ($i=1; $i <= $num ; $i++) {
        $facto *= $i;
    }
    
    return $facto;
    
}



function tablas($num2) {
    
    $resu = '';

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num2 * $i;
        $resu .= "<p>$num2 X $i = $resultado</p>";
    }
    return $resu;
}



function calcularProbabilidad($tN, $k) {
    $tC = combinacion($tN, $k);
    return (1 / $tC) * 100;
}

function combinacion($n, $k) {
    return factorial($n) / (factorial($n - $k) * factorial($k));
}

function factorial($n) {
    return ($n == 0) ? 1 : $n * factorial($n - 1);
}

function calcularProbabilidadJugadas($tN, $k, $intentos) {
    $probabilidadI = calcularProbabilidad($tN, $k) / 100;
    $probabilidadT = 1 - pow((1 - $probabilidadI), $intentos);
    return $probabilidadT;
}


?>