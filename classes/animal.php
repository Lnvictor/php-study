<?php

class Animal {
    public $name;
    public $age;
    public $species;

    public function __construct(string $name, int $age, string $species){
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function sayMyName(): String{
        return $this->name;
    }

    public function noise(): string{
        return "I am a generic class, I dont have noise!!!!";
    }
}

class Lion extends Animal{
    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
        $this->species = "lion";
    }

    public function noise(): string{
        return "Roooooooar!!!!";       
    }
}


class Tiger extends Animal{
    public function __construct(string $name, int $age, string $species = "tiger"){
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;  
    }

    public function noise(): string{
        return "MIAAAAAAAAAU!!!!";
    }
}


$lion = new Lion("Simba", 10);
$tiger = new Tiger("Drogo", 8);

$animals = [$lion, $tiger];

foreach ($animals as $animal) {
    echo "Name: " . $animal->name . " Species: " . $animal->species . " Age: " . $animal->age . " Noise: " . $animal->noise() . PHP_EOL;
}
