<?php

class funcionario{
    private $nome;
    private $cpf;
    private $salarioBase;

    public function __construct($nome, $cpf, $salarioBase) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }
    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
        echo "Salário Base: R$" . number_format($this->salarioBase, 2, ',', '.') . "<br>";
    }
}

class gerente extends funcionario {
    private $bonus;

    public function __construct($nome, $cpf, $salarioBase, $bonus) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->bonus = $bonus;
    }

    public function calcularSalario() {
        return parent::calcularSalario() + $this->bonus;
    }

    public function exibirDados() {
        parent::exibirDados();
        echo "Bônus: R$" . number_format($this->bonus, 2, ',', '.') . "<br>";
    }
}

class estagiario extends funcionario{
    private $horasEstagio;
    private $valorHora;

    public function __construct($nome, $cpf, $salarioBase, $horasEstagio, $valorHora) {
        parent::__construct($nome, $cpf, $salarioBase);
        $this->horasEstagio = $horasEstagio;
        $this->valorHora = $valorHora;
    }
    public function calcularSalario() {
        return $this->horasEstagio * $this->valorHora;
    } 
}

class FuncionarioComum extends funcionario {
}

// Exemplo de uso
$funcionario1 = new funcionario("João", "123.456.789-00", 3000);
$funcionario1->exibirDados();
$funcionario1->calcularSalario();
echo "<br>";
$gerente1 = new gerente("Maria", "987.654.321-00", 5000, 1000);
$gerente1->exibirDados();
$gerente1->calcularSalario();
echo "<br>";
$estagiario1 = new estagiario("Pedro", "111.222.333-44", 1500, 20, 15);
$estagiario1->exibirDados();
$estagiario1->calcularSalario();
echo "<br>";
$funcionarioComum1 = new FuncionarioComum("Ana", "555.666.777-88", 2500);
$funcionarioComum1->exibirDados();
$funcionarioComum1->calcularSalario();

