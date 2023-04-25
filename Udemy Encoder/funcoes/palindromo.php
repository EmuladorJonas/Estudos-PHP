<div class="titulo">Desafio Palindromo</div>

<?php 



function palindromo($palavra) {
    $umtimoIndice = strlen($palavra) -1;

    for($i = 0; $i <= $umtimoIndice; $i++){
        if($palavra[$i] !== $palavra[$umtimoIndice - $i]) {
            return 'Não';
        } 
    }
    return 'Sim';
}

echo palindromo('arara') . '<br>';
echo palindromo('bola') . '<br>';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'sim' : 'não';
}


echo palindromoSimples('arara') . '<br>';
echo palindromoSimples('bola') . '<br>';


?>