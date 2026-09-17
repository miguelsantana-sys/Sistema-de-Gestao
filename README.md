Gestão de Funcionários — POO em PHP

Sistema simples de gerenciamento de funcionários desenvolvido em PHP puro, aplicando os principais conceitos de Programação Orientada a Objetos: encapsulamento, construtores, getters/setters com validação e organização em múltiplos arquivos.

Funcionalidades
Cadastro de funcionários com nome, cargo e salário
Validação de dados via setters (salário positivo, cargo dentro de uma lista permitida)
Cálculo do salário líquido (desconto de 11%, com adicional de 5% para salários acima de R$ 5.000)
Verificação de elegibilidade para bônus (cargo de Coordenador + salário líquido acima de R$ 4.000)
Gerenciamento de um departamento: adição de funcionários, cálculo da folha total e da média salarial
Filtro de funcionários por cargo
Cadastro de um novo funcionário via entrada do usuário no terminal
Estrutura do projeto
├── Funcionario.php    # Classe Funcionario (atributos, getters, setters, cálculos)
├── Departamento.php   # Classe Departamento (lista de funcionários e agregações)
└── teste.php           # Ponto de entrada: monta o departamento e executa os cálculos
Como executar
bash
php teste.php

O script pede o nome, cargo e salário de um novo funcionário pelo terminal e, em seguida, imprime a folha de pagamento total e a média salarial do departamento.

Tecnologias
PHP (POO)
