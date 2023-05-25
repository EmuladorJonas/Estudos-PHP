<div class="titulo">Desafio 7 Erros</div>

<?php

interface Template
{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo3()
    {
        echo "estou funcionando";
    }

    public function metodo1()
    {

    }
    
    public function metodo2($parametro)
    {

    }
}

class Classe extends ClasseAbstrata
{
    function __contruct($parametro) {
        
    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();

?>