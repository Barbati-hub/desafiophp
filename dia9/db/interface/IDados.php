<?php
// Gero um contrato
namespace Db\Interfaces;

interface IDado{
    public function salvaar($objeto); // SAlvar em qualquer lugar
    public function todos(); // Buscar em qualquer lugar
}