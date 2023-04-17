<div class="titulo">For</div>

<?php 

for($cont = 1; $cont <= 5; $cont ++){
    echo "$cont <br>";
}

echo"--------<br>";

for(; $cont <= 10; $cont ++){
    echo "$cont <br>";
}

$semana = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

print_r($semana);
echo "<br>";

for($i = 1; $i <= count($semana) ; $i++){
echo "$semana[$i] <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo"--------<br>";

for($i = 0; $i < count($matriz) ; $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo "{$matriz[$i][$j]} ";
    }
    echo "<br>";
    }

?>