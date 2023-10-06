<?php
// A interface define o contrato que models e classes tem 
//obedecer ou implmementar metodos publicos que as classes 
// devem seguir
// 

// Definição de uma interface
interface Animal {
    public function fazerSom();
    public function mover();
}

// Classe que implementa a interface Animal
class Cachorro implements Animal {
    public function fazerSom() {
        echo "O cachorro faz latidos.\n";
    }

    public function mover() {
        echo "O cachorro se move correndo.\n";
    }
}

// Classe que implementa a interface Animal de forma diferente
class Gato implements Animal {
    public function fazerSom() {
        echo "O gato faz miados.\n";
    }

    public function mover() {
        echo "O gato se move pulando.\n";
    }
}

// Uso das classes
$cachorro = new Cachorro();
$cachorro->fazerSom(); // Saída: O cachorro faz latidos.
$cachorro->mover();    // Saída: O cachorro se move correndo.

$gato = new Gato();
$gato->fazerSom();     // Saída: O gato faz miados.
$gato->mover();        // Saída: O gato se move pulando.
