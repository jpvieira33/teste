<?php

function seculo($ano) {

    if (is_int($ano)) {
        if ($ano == 1) return 1;
        if ($ano > 2101 || $ano < 1) return null;

        $resultado = round(($ano - 2) / 100) + 1;
        return "Século: " . $resultado;
    } else {
        return  "Não é um número";
    }

}


function primos($num1, $num2)
{

    $resul = [];

    for ($i = $num1; $i < $num2; $i++) {
        $divisores = 0;

        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2) {
            array_push($resul, $i);
        }

    }

    print_r($resul) ;
}

function sortear()
{
    $arr = [];

    for ($i = 1; $i <= 10; $i++) {
        $gera = rand(1, 10);
        array_push($arr, $gera);
    }

    $arr2 = array_count_values($arr);

    echo "<strong>Array Sorteado: </strong>" ;
    print_r($arr);
    echo '<br>';

    echo '<strong>Valores não repetidos: </strong>' ;
    foreach($arr2 as $key => $value){
        if($value == 1){
            echo  $key . ', '  ;
        }
    }

}

function sequence($arr)
{
    if(is_array($arr)){
        $seq = $arr[0];
        foreach ($arr as $valor) {
            unset($arr[0]);
            if ($seq = $valor) {
                $resultado ="Não Sequencial";
            }
            else {
                $resultado = "Sequencial" ;
            }

            $seq = $seq + 1 ;
        }

        echo $resultado;


    } else {
        echo "Valor não é um array";
     }

}

sequence([3, 6, 5, 8, 10, 20, 15]);
