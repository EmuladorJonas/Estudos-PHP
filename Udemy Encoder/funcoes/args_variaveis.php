<div class="titulo">Argumentos Variaveis</div>

<?php 

    function soma($a, $b) {
        return $a + $b;
    }

    echo soma(4, 5) . '<br>';
    echo soma(4, 5, 10) . '<br>';

    function somaCompleta(...$numeros) {
        $soma = 0;
        foreach($numeros as $num) {
            $soma += $num;
        }
        return $soma;
    }

    echo somaCompleta(1, 2, 3, 4, 5);

    $array = [6, 7, 8];
    echo '<br>' . somaCompleta(...$array);

    function membros($titular, ...$dependentes) {
        echo "Titular: $titular <br>";
        if($dependentes) {
            echo "Dependendes: ";
            foreach($dependentes as $dep) {
                echo "<br>". $dep;
            }
        }
    }

    echo '<br>';
    membros("Jonas", "Jonas1", "Jonas2", "Jonas3");
    
    echo '<br>';
    membros("Jonas");

?>