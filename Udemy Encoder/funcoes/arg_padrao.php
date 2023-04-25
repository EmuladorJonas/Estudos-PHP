<div class="titulo">Argumento Padrão</div>

<?php 

    function saudacao($nome ='Senhor', $sobrenome = 'Cliente') {
        echo "Bom-vindo, $nome $sobrenome! <br>";
    }

    saudacao();
    saudacao(NULL);
    saudacao("Jonas", "Santos");
    

?>