<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return 'JAIME ALEJANDRO VEGA BARBOSA';
});

Route::get('/php-basico', function () {


    echo "<h1 style='color:red';>Aprendiendo PHP</h1>";
    $name = "Jaime Vega";
    $height = 1.74;
    $isLogin = true;
    $age = 26;

    echo "<h4> " . $name . " </h4>";
    echo "<p> " . $name . " </p>";
    
    echo "<br><br><br> ****************** ESTRUCTURAS DE CONTROL ******************<br><br><br>";

    $message = "Soy $name, tengo $age años. ". validateAge($age);


    $message .= $isLogin ? " Estoy logeado" : " No estoy logeado";

    echo $message;

    echo "<br><br><br> ****************** ESTRUCTURAS DE DATOS ******************<br><br><br>";

    $pc = [
        "name" => "pc gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "name" => "Teclado",
        "price" => 200,
        "marca" => "Asus"
    ];

    $lista_productos = [$pc, $teclado];

    foreach ($lista_productos as $item) {
        echo $item['name'] ."<br>";
    };
});

function validateAge($age) {
    if ($age >= 18) {
        return " Soy mayor de edad";
    } else {
        return " Soy menor de edad";
    };
}