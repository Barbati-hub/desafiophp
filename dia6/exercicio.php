<?php

$registerProduct = [];

function register(){
     global $registerProduct; 
    echo "Digite o Código do Produto: ";
    $id = fgets(STDIN);

    echo "Digite o Nome do Produto: ";
    $product = fgets(STDIN);

    echo "Digite a Descrição: ";
    $description = fgets(STDIN);

    echo "Digite a Quantidade: ";
    $qdte = fgets(STDIN);

    $ProductRegister = [
        "id" => $id,
        "Produto" => $product,
        "Descrição" => $description,
        "Quantidade" => $qdte
    
];
    $registerProduct [] = $ProductRegister;
    echo "Produto cadastrado com sucesso!\n";

}

function listProduct(){
   global $registerProduct;
   echo "=== ESTOQUE ===\n";
   foreach ($registerProduct as $product){
        echo "\n";
        echo "ID: {$product["id"]}\n";
        echo "Produto: {$product["Produto"]}\n";
        echo "Descrição: {$product["Descrição"]}\n";
        echo "Quantidade: {$product["Quantidade"]}\n";
    }

  
}
function contagemRegressiva(){
    for($i = 5; $i >0  ; $i--){
        sleep(1);
        echo "Saindo em: $i"  . "\n";
    }
}



while(true){
    echo "Digite S (SIM) para Cadastrar outro Profissional N (NÃO) para SAIR ";
    $cadastro = trim(fgets(STDIN));

    if (strcasecmp($cadastro, "S") == 0){
        echo "
        1 - Cadastrar Produto
        2 - Listar Produto
        ";
        echo "Escolha uma Opção Acima: ";
        $opcao = fgets(STDIN);
        switch($opcao){
            case 1: {
                register();
                break;
            };
            case 2: {
                listProduct();
                break;
            };
        };
    }
    if (strcasecmp($cadastro, "N") == 0){
        contagemRegressiva();
        exit();
    }
    
}
