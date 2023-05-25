<div class="titulo">Métodos Mágicos</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construtor invocado <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$valor} <br>";
    }
}

$pessoa = new GlobalPessoa('Jonas', 25);
$pessoa->apresentar();
echo $pessoa,"<br>";

echo $pessoa->nomeCompleto = 'Jonas2';



?>