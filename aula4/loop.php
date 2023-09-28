<?php
// LOOP 
// determina quantas vezes vai se repetir o bloco
// for ($i = 0; $i < 5; $i++){
//     echo "Este é o loop {$i} " ."\n";
// }// Utiliza quando sabe o começo e o fim

// while (true) {
//     echo "Loop Infinito .. \n";
//     echo "Digite 1 para sair";
//     $dado = fgets(STDIN);

//     if($dado == 1) break;
// }


// while (true) {
//     echo "Loop Infinito .. \n";
//     echo "Digite 1 para sair: ";
//     $dado = fgets(STDIN);

//     if($dado == 0) continue;

//     echo "O numero digitado foi $dado";

//     if($dado == 1) break;
// }

// while (true) {
//     echo "Loop Infinito .. \n";
//     echo "Digite 1 para sair: ";
//     $dado = fgets(STDIN);

//     if ($dado == 1) {
//         echo "O número digitado foi $dado";
//         break; // Isso encerrará o loop quando $dado for igual a 1.
//     }

//     if ($dado == 0) {
//         echo "O numero digitado foi $dado";
//         continue; // Isso fará com que o loop continue imediatamente para a próxima iteração se $dado for igual a 0.
//     }
// }

// $contador = 0; // primeiro faz e depois entra no LOOP
// do {
//     echo $contador . "\n";
//     $contador++;
// }while ($contador < 10);