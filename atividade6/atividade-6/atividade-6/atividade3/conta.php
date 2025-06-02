<?php
class Conta {
    private $titular;
    private $saldo = 0;

    public function setTitular($titular){
        $this->titular = $titular;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function getSaldo(){
        return $this->saldo;
    }
     public function sacar($valor){
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
    public function __construct($titular, $saldoInicial = 0) {

    $this->titular = $titular;
    $this->saldo = $saldoInicial;

    }

    
}

$conta = new Conta('caio');
echo "Saldo atual: R$ " . $conta->getSaldo();
echo "<br>";
$conta->depositar(100);
echo "Depósito de R$ 100 realizado.";
echo "<br>";

$conta->setTitular("João");
echo "Titular: " . $conta->getTitular();
echo "<br>";

if ($conta->sacar(50)) {
    echo "Saque de R$ 50 realizado com sucesso.";
} else {
    echo "Saldo insuficiente para saque.";
}
echo "<br>";
echo "Saldo atual: R$ " . $conta->getSaldo();


