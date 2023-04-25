<div class="titulo">Usando Tipos</div>

<?php 

    function somar1($a, $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar1(1 ,2) . '<br>';
    echo somar1(1.5 ,2.5) . '<br>';

    function somar2(int $a, int $b) {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar2(1 ,2) . '<br>';
    echo somar2(1.5 ,2.5) . '<br>';

    function somar3($a, $b) : int { //Retornando valor de topo definido
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar3(1 ,2) . '<br>';
    echo somar3(1.5 ,2.7) . '<br>';
?>