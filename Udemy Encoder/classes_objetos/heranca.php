<div class="titulo">Herança</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada!!!<br>';
    }

    function __destruct()
    {
        echo 'Pessoa diz: Tchau!!!<br>';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login)
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent:: __construct($nome, $idade); // forma mais simples de fazer o construtor que recebe os mesmos parametros da herança
        $this->login = $login;
        echo 'Usuario Criado!!!<br>';
    }

    function __destruct()
    {
        echo 'Usuario diz: Tchau!!!<br>';
        parent::__destruct();
    }

    public function apresentar()
    {
        echo "@{$this->login}<br>";
        parent::apresentar(); //Usando um pedaço da função da classe pai   
    }
}

$usuario = new Usuario('Jonas', 25, 'Emulador14');
$usuario->apresentar();

unset($usuario);

?>