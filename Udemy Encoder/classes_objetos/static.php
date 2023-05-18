<div class="titulo">Membros Estaticos</div>

<?php 

 class A {
    public $naoStatic = 'Variavel de instância';
    public static $static = 'Variável de classe (estatica)';

    public function mostrarA() {
        echo "Não estático = {$this->naoStatic}<br>";
        //Tentativa 1
        //echo "Estatica = {$this->static}<br>";
        //Tentativa 2
        //echo "Estatica = {self::$static}<br>";
        echo "Estatica = ". self::$static . "<br>";

    }

    public static function mostrarStaticA() {
        //echo "Não estática = {$this->naoStatic}<br>";
        //echo "Estática = {$static}<br>";
        echo "Estatica = ". self::$static . "<br>";
    }
 }

 $objetoA = new A();
 $objetoA->mostrarA();
 $objetoA->mostrarStaticA();

 A::mostrarStaticA(); //mostrar função statica a partir da classe

?>