<?php

class Funcionario {
    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, float $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getCargo() : string {
        return $this->cargo;
    }

    public function getSalario() : float {
        return $this->salario;
    }

    // Questão 2

    public function setSalario(float $valor) : void {
        if ($valor > 0) {
            $this->salario = $valor;
        }
    } 

    public function setCargo(string $novoCargo) : void {
        $cargosValidos = ["Analista", "Assistente", "Coordenador"];
        
        if (in_array($novoCargo, $cargosValidos, true)) {
            $this->cargo = $novoCargo;
        }
    }
    
    //Questão 3

    public function calcularSalarioLiquido() : float {
        $liquido = $this->salario * 0.89;

        if ($this->salaraio > 5000) {
            $liquido = $this->salario * 0.05;
        }
        return $liquido;
    }

    // Questão 4

    public function ehElegivelParaBonus() : bool {
        return $this->cargo "Coordenador" && $this->calcularSalarioLiquido() > 4000;
    }
}