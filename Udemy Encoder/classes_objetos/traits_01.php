<div class="titulo">Traits #1</div>

<?php

use Usuario as GlobalUsuario;

trait Validacao
{
    public function validarString($str)
    {
        return isset($str) && $str !=='';
    }
}

trait validacaoMelhor
{
    public function validarStringMelhor($str)
    {
        return isset($str) && trim($str);
    }
}

class Teste
{
    use Validacao, validacaoMelhor;
}

$usuario = new Teste();

?>