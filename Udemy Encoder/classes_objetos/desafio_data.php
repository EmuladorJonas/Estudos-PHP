<div class="titulo">Desafio Data</div>

<?php 

    class Data {
        public $dia = 01;
        public $mes = 01;
        public $ano = 1970;

        function apresentar() {
            echo 'Marco 0: '."{$this->dia}/{$this->mes}/{$this->ano}";
        }

    }

    $d1 = new Data();
    $d1 -> apresentar();

?>