<div class="titulo">Interface</div>

<?php 

interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}

class Cachorro implements Animal, Canino {
    function respirar() {
        return "Respirei!";
    }

    function latir(): string {
        return 'Au! Au!';
    }
}

$animal1 = new Cachorro();
echo $animal1 -> respirar(), '<br>';
echo $animal1 -> latir(), '<br>';

echo 'Fim!';
?>