<?php

while(true){
    echo "Digite S (SIM) para Cadastrar outro Profissional N (NÃO) para SAIR ";
    $cadastro = trim(fgets(STDIN));

    if (strcasecmp($cadastro, "S") == 0){
        echo "
        1 - Cadastrar Profissional
        2 - Alterar Profissional
        3 - Excluir Profissional
        4 - Listar Profissionais " . "\n";
        
    
    
        echo "Escolha uma Opção Acima: ";
        $opcao = fgets(STDIN);
        
        switch($opcao){
            case 1: {
                echo "================================================" . "\n";
                echo "==========  CADASTRO DE PROFISSIONAIS  =========" . "\n";
                "\n";
                "\n";
                echo "Digite o nome do profissional:" . "\n";
                $nomeProfissional = fgets(STDIN);
                echo "Digite o Cargo do Profissional: ". "\n";
                $cargoProfissional = fgets(STDIN);
                echo "Digite o Valor do Profissional: ". "\n";
                $valorProfissional = fgets(STDIN);
                break;
            };
            case 2: {
                echo "Alterar";
                break;
            };
            case 3: {
                echo "Excluir";
                break;
            };
            case 4: {
            
                for ($i = 0; $i < count($profissionais); $i++) {
                    echo "$profissionais[$i] " . "\n";
                };
            };
        }
    
        $profissional = [
            array(
            "nome" => $nomeProfissional,
            "cargo" => $cargoProfissional,
            "valor" => $valorProfissional
            ),
        ];
        
        foreach ($profissional as $profissionais){
            echo "=== DADOS DOS PROFISSIONAIS === \n";
            "\n";
            echo "Nome: {$profissionais["nome"]} \n";
            echo "Cargo: {$profissionais["cargo"]} \n";
            echo "Valor: {$profissionais["valor"]} \n";
        }
    } 
    if (strcasecmp($cadastro, "N") == 0){
        exit();
    }
    
};