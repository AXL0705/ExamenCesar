<?php

include_once 'persona.php';

$persona = new Persona;
$persona->nombre = 'Kevin Axel Angulo Valdivia';
$persona->peso = 70;
$persona->estatura = 1.72;
$persona->IMC = $persona->peso / ($persona->estatura * $persona->estatura ); 

$persona->calcularIMC();