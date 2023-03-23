<?php

$name = readline('Insira o seu nome: ');
$age = (int) readline('Insira a sua idade: ');

if ($age >= 18){
    echo "$name, você pode comprar bebida alcolica\n";
}
else{
    echo "$name, você é menor de idade, não pode comprar bebida alcolica\n";
}