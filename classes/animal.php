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

    public function sayMyName(){
        return $this->name;
    }
}

class Lion extends Animal{
    public function __construct(string $name, int $age, string $species = "lion"){
        $this->name = $name;
        $this->age = $age;
        $this->species = "lion";
    }
}


$lion = new Lion("Simba", 10, "lion");
echo $lion->sayMyName() . PHP_EOL;
echo get_debug_type($lion) . PHP_EOL;