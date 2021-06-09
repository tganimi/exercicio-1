<?php

class Exercicio1
{
    public function printLocations($location)
    {
        foreach ($location as $key => $value) {
            echo "A capital " . $value["preposition"] . " " . $value["country"] . " é " . $key."<br>";
        }
    }
}

