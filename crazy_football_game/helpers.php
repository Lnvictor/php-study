<?php

require 'player.php';

function __constructSpain(){
    $players = array(
        'GK' =>  new Player('Unai Simon', '1', 85, 10), 
        'CB' => new Player('Sergio Ramos', '4', 90, 25),
        'CB' => new Player('Gerard Pique', '3', 85, 18),
        'RD' => new Player('Dani Carvajal', '2', 80, 80),
        'LD' => new Player('Jordi Alba', '6', 82, 78),
        'MD' => new Player('Sergio Busquets', '5', 85, 85)
    );

    return $players;
}

function  __constructBrazil(){
    return "Brazil";
}

$teams = array('spain' => '__constructSpain', 'brazil' => '__constructBrazil' );

function constructTeams($team){
    global $teams;

    return $teams[$team]();
}