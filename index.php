<?php

include 'includes/autoload.php';

$location = [
    'Brasília' => ['country' => 'Brasil', 'preposition' => 'do'],
    'Washington' => ['country' => 'EUA', 'preposition' => 'dos'],
    'Madrid' => ['country' => 'Espanha', 'preposition' => 'da'],
    'Paris' => ['country' => 'França', 'preposition' => 'da'],
    'Buenos Aires' => ['country' => 'Argentina', 'preposition' => 'da'],
];

/**
 * asc ordering the array by index
 */
ksort($location);

$locations = new Exercicio1\Exercicio1();
$locations->printLocations($location);