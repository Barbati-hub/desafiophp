<?php
//  Faça um programa que simule um menu de cadastro
// o seu programa tem que ficar com esta usabilidade

// ========== MENU ==========
// Escolha uma das opções abaixo
// 1 - Cadastrar Aluno
// 2 - Alterar Aluno
// 3 - Excluir Aluno
// 4 - Mostrar todos os Alunos
// 5 - Sair

// ao selecionar a opção desejada o sistema
// vai dar uma mensagem referente a seleção, exemplo:

// Escolheu opção 1, mostre:
// "Este é para Cadastrar o Aluno:"

// depois voltar para o menu e continuar no mesmo até que o aluno digite a opção 5


while(true){
    echo "========== MENU ==========" . "\n";
    echo " 1 - Cadastrar Aluno
    2 - Alterar Aluno
    3 - Excluir Aluno
    4 - Mostrar todos os Alunos
    5 - Sair
    ";
    
    echo "Escolha uma opção: ";
    $opcao = fgets(STDIN);
    
    switch ($opcao) {
        case 1:
            echo "Nome do Aluno: ";
    
            echo "Endereço:";
            break;
        case 2:
            echo "Alterar Aluno";
            echo "Nome do Aluno a ser Alterado";
            break;
        case 3:
            echo "Excluir Aluno";
            break;
        case 4:
            echo "Alunos Cadastrados";
            break;
        default:
            echo "Saindo";
            exit();
    }
}

