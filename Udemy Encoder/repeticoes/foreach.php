<div class="titulo">For Each</div>

<?php 

$semana = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

foreach($semana as $valor){
    echo "$valor <br>";
}

foreach($semana as $indice => $valor ){
    echo "$indice => $valor <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matriz as $linha){
    //echo "$linha <br>";

    foreach($linha as $valor){
        echo "$valor ";
    }
    echo"<br>";
}

?>