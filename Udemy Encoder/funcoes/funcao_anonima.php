<div class="titulo">Funções Anonimas</div>

<?php 

    $soma = function ($a, $b){
        return $a + $b;
    };
    
    $sub = function ($a, $b){
        return $a - $b;
    };
    
    $mul = function ($a, $b){
        return $a * $b;
    };

    echo $soma(1, 2) . '<br>';

    function executar($a, $b, $op, $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado <br>" ;
    }

    executar(2, 3, '+', $soma);
    executar(2, 3, '-', $sub);
    executar(2, 3, '*', $mul);

?>