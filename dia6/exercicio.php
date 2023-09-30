<?php

function register(){
    echo "Digite o Código do Produto: ";
    $id = fgets(STDIN);

    echo "Digite o Nome do Produto: ";
    $product = fgets(STDIN);

    echo "Digite a Descrição: ";
    $description = fgets(STDIN);

    echo "Digite a Quantidade: ";
    $qdte = fgets(STDIN);

}

function listProduct(){
    $registerProduct = [
        array(
            "id" => $id,
            "Produto" => $product,
            "Descrição" => $description,
            "Quantidade" => $qdte
        )
    ];

    foreach ($registerProduct as $products){
        echo "=== ESTOQUE === \n";
        "\n";
        echo "ID: {$products["id"]} \n";
        echo "Produto: {$products["Produto"]} \n";
        echo "Descricão: {$products["Descrição"]} \n";
        echo "Quantidade: {$products["Quantidade"]} \n";
    }
}



while(true){
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
