<?php

require 'player.php';

$squadSpain = array(
    'GK' =>  new Player('Unai Simon', '1', 85, 10), 
    'CB' => new Player('Sergio Ramos', '4', 90, 25),
    'CB' => new Player('Gerard Pique', '3', 85, 18),
    'RD' => new Player('Dani Carvajal', '2', 80, 80),
    'LD' => new Player('Jordi Alba', '6', 82, 78),
    'MD' => new Player('Sergio Busquets', '5', 85, 85),
    'MD' => new Player('Gavi', '8', 83, 70), 
    'MD' => new Player('Pedri', '6', 87, 73),
    'RWF' => new Player('Dani Olmo', '11', 84, 65),
    'LWF' => new Player('Marco Asensio', '10', 86, 65),
    'CF' => new Player('Alvaro Morata', '9', 85, 60),
);

$squadBrazil = array(
    'GK' =>  new Player('Alisson Becker', '1', 90, 10), 
    'CB' => new Player('Thiago Silva', '4', 87, 25),
    'CB' => new Player('Marquinhos', '3', 85, 18),
    'RD' => new Player('Danilo', '2', 80, 80),
    'LD' => new Player('Alexsandro', '6', 82, 78),
    'MD' => new Player('Casemiro', '5', 90, 85),
    'MD' => new Player('Lucas Paqueta', '17', 80, 70), 
    'MD' => new Player('Neymar JR', '10', 93, 73),
    'RWF' => new Player('Antony', '11', 87, 65),
    'LWF' => new Player('Vini JR', '20', 95, 65),
    'CF' => new Player('Richarlison', '9', 85, 60),
);

$teams = array('spain' => $squadSpain, 'brazil' => $squadBrazil );

function constructTeams($team){ global $teams;
    return $teams[$team];
}

function drawTeams($teams){
    // echo($teams);
   foreach ($teams as $index => $player) {
        $position = $player->position;
        return "<span class=\"dot $position\"></span>";
   } 
}

function drawPitch(){
    global $squadSpain;
    $team = drawTeams($squadSpain);
    return "<div class=\"field\">
        <img src=\"img/soccer-pitch-327423.jpg\" height=620 width=1000>
        $team
    </div>";
}
