<div class="titulo">Desafio Sorteio</div>

<?php 

$nomes = ["Nome1", "Nome2", "Nome3", "Nome4"];


echo "<div center><h1>" . $nomes[array_rand($nomes)] . "</h1></div>"


?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }

</style>