<?php
class carro{
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
}   

$carro1 = new carro("Fusca", "Fusca", 1970);
$carro2 = new carro("Civic", "Civic", 2020);
echo "atividade 1<br>";
echo "Carro 1: " . $carro1->marca . " " . $carro1->modelo . " " . $carro1->ano . "<br>";
echo "Carro 2: " . $carro2->marca . " " . $carro2->modelo . " " . $carro2->ano . "<br>";
echo "<br>";


//atividade 2
echo "atividade 2<br>";
exibirCarro($carro1);
exibirCarro($carro2);
function exibirCarro($carro){
    echo "Carro: " . $carro->marca . " " . $carro->modelo . " " . $carro->ano . "<br>";
}
