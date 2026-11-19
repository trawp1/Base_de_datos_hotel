<?php

$rutas = [

   
    "GET" => [

        
       "/base_de_datos_hotel/public/ciudad" =>
    ['ciudadcontroller', 'index'],

"/base_de_datos_hotel/public/ciudad/crear" =>
    ['ciudadcontroller', 'crear'],

"/base_de_datos_hotel/public/ciudad/editar" =>
    ['ciudadcontroller', 'mostrarEditar'],

        
        "/base_de_datos_hotel/public/cliente" =>  ['clienteController', 'index'],
        "/base_de_datos_hotel/public/cliente/crear" =>  ['clienteController', 'crear'],
        "/base_de_datos_hotel/public/cliente/editar" =>   ['clienteController', 'mostrareditar'],


        "/base_de_datos_hotel/public/habitacion" => ['habitacioncontroller', 'index'],
        "/base_de_datos_hotel/public/habitacion/crear" =>  ['habitacioncontroller', 'crear'],
        "/base_de_datos_hotel/public/habitacion/editar" => ['habitacioncontroller', 'mostrareditar']

    ],


    "POST" => [

       "/base_de_datos_hotel/public/ciudad/guardar" =>
    ['ciudadcontroller', 'guardar'],

"/base_de_datos_hotel/public/ciudad/editar" =>
    ['ciudadcontroller', 'editarTodas'],

"/base_de_datos_hotel/public/ciudad/eliminar" =>
    ['ciudadcontroller', 'eliminar'],


        "/base_de_datos_hotel/public/cliente" => ['clienteController', 'guardar'],
        "/base_de_datos_hotel/public/cliente/editar" =>  ['clienteController', 'editartodas'],
        "/base_de_datos_hotel/public/cliente/eliminar" => ['clienteController', 'eliminar'],


        "/base_de_datos_hotel/public/habitacion" => ['habitacioncontroller', 'guardar'],
        "/base_de_datos_hotel/public/habitacion/editar" => ['habitacioncontroller', 'editartodas'],
        "/base_de_datos_hotel/public/habitacion/eliminar" => ['habitacioncontroller', 'eliminar']

    ]

];

return $rutas;

?>
