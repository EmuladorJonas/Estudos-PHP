<div class="titulo">Argumentos & Retorno</div>

<?php 

function obterMenssagem() {
    return 'Seja bem-vindo <br>';
}

echo obterMenssagem();
$m = obterMenssagem();

echo $m;
echo '<br>', obterMenssagem();
var_dump(obterMenssagem());

function obterMenssagemComNome($nome) {
    return "Seja bem-vindo, $nome! <br>";
}

echo obterMenssagemComNome('Jonas');
echo obterMenssagemComNome('Jonas2');
echo obterMenssagemComNome('Jonas3');

function soma($a, $b){
    return $a + $b;
}


$x = 4;
$y = 5;
echo '<br>', soma(4, 5);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
    return $a;
}

$variavel = 1;
trocaValor($variavel, 3);

echo '<br>', $variavel;
echo '<br>', trocaValor($variavel, 3);

function trocaValorDefinitivo(&$a, $novoValor) {
    $a = $novoValor;
}

TrocaValorDefinitivo($variavel, 5);
echo '<br>', $variavel;

?>