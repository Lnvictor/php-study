<?php

class Player {
    public string $name;
    public string $number;
    public int $attackScore;
    public int $defenceScore;

    public function __construct($name, $number, $attackScore, $defenceScore){
        $this->name = $name;
        $this->number = $number;
        $this->attackScore = $attackScore;
        $this->defenceScore = $defenceScore;
    }
}