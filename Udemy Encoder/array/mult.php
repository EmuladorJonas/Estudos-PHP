<div class="titulo">Multidimenssionais</div>

<?php 

$dados = [
    [
        "nome" => "Roberto",
        "idade" => "26",
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => "25",
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do Mexico"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2] ["Vizinho"] = "Chaves";
echo '<br>';
print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1]);


?>