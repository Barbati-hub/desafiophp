CREATE DATABASE IF NOT EXISTS estoque;  

use estoque;

CREATE TABLE IF NOT EXISTS produtos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    preco FLOAT NOT NULL,
    quantidade INT NOT NULL
)

mysql -u root -p'Dd84255798' < script.sql