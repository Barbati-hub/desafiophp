<?php

// Gero um contrato
namespace Db\Interfaces;

use Db\Intercafes\Idade;

class Memoria implements Idado{
    public function salvaar($objeto); // SAlvar em qualquer lugar
    public function todos(); // Buscar em qualquer lugar
}