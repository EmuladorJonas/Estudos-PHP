<div class="titulo">Função & Escopo</div>

<?php 

function imprimirMenssagens() {
    echo "Olá ";
    echo "Até a proxima!!! <br> ";
}

imprimirMenssagens();
imprimirMenssagens();

$variavel = 1;

function trocarValor() {
    $variavel = 2;
    echo "Durante a funçao: $variavel <br>";

}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

function trocaValorDefinitivo() {
    global $variavel;
    $variavel = 3;
    echo "Durante a funçao: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDefinitivo();
echo "Depois: $variavel <br>";

var_dump(trocaValorDefinitivo());

?>