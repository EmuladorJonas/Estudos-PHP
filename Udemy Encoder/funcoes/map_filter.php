<div class="titulo">Map & Filter</div>

<?php 

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br>'; 

$notasFinais2 = array_map('round' , $notas); //Usando MAP
print_r($notasFinais2);

$apenasAprovados = [];
foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasAprovados[] = $nota;
    }
}

echo '<br>';
print_r($apenasAprovados);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasAprovados2);

?>