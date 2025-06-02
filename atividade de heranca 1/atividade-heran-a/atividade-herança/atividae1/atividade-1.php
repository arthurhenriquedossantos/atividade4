<?php
class veiculo{
    private $marca;
    private $modelo;
    private $ano;
    private $cor;

    public function __construct($marca, $modelo, $ano, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function exibirinformaçoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Cor: " . $this->cor . "<br>";
    }
}

class carro extends veiculo {
    private $portas;

    public function __construct($marca, $modelo, $ano, $cor, $portas) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->portas = $portas;
    }

    public function exibirinformaçoes() {
        parent::exibirinformaçoes();
        echo "Portas: " . $this->portas . "<br>";
    }
}
class moto extends veiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $ano, $cor, $cilindrada) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->cilindrada = $cilindrada;
    }

    public function exibirinformaçoes() {
        parent::exibirinformaçoes();
        echo "Cilindrada: " . $this->cilindrada . "cc<br>";
    }
}

class caminhão extends veiculo {
    private $capacidadeCarga;

    public function __construct($marca, $modelo, $ano, $cor, $capacidadeCarga) {
        parent::__construct($marca, $modelo, $ano, $cor);
        $this->capacidadeCarga = $capacidadeCarga;
    }

    public function exibirinformaçoes() {
        parent::exibirinformaçoes();
        echo "Capacidade de Carga: " . $this->capacidadeCarga . "kg<br>";
    }
}

// Exemplo de uso
$carro = new carro("Toyota", "Corolla", 2020, "Prata", 4);
$moto = new moto("Honda", "CB500", 2019, "Vermelha", 500);
$caminhão = new caminhão("Volvo", "FH", 2021, "Azul", 20000);
$carro->exibirinformaçoes();
echo "<br>";
$moto->exibirinformaçoes();
echo "<br>";
$caminhão->exibirinformaçoes();
