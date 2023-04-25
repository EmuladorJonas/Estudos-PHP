<div class="titulo">Recursividade</div>

<?php 

function somaNum($numero){ //By eu msm
    $res=0;
    for ($i = 0; $i <= $numero; $i++){
        $res += $i;
    }
    return $res;
}

function somaNumAte($numero){ //By eu prof
    $soma = 0;
    for (; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaNum(5) . '<br>';
echo somaNumAte(5) . '<br>';

function recursiva($numero){
    if($numero === 1){ //Condição de Parada
        return 1;
    }else{
        return $numero + recursiva($numero - 1); //Forma trivial
    }
}

echo recursiva(10) . '<br>';


function recursiva2($numero){ //Recursiva Ternaria
    return $numero === 1 ? 1 : $numero + recursiva2($numero -1);
}

echo recursiva2(10) . '<br>';

?>