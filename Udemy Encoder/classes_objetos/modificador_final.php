<div class="titulo">Modificador Final</div>

<?php 

abstract class Abstrata
{
    abstract public function metodo1();

    public final function metodo2() {
        echo "Não vou mudar!!!";
    }
}

class Classe extends Abstrata
{
    public function metodo1()
    {
        echo "Executando metodo 1";
    }

    // public function metodo2() {
    //     echo "Extendendo método 2 <br>";
    // }

}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $att;
}

class Duplicata extends Unica
{
    public $att2;
}

?>