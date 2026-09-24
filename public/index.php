<?php

require_once __DIR__ ."/../app/controllers/ciudadController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


?>

<a href="ciudad">ciudad</a>

<?php 

if ($method === 'GET' && $uri === "/ciudad"){
    $ciudadController= new ciudadController();
    $ciudadController->index();
}

?>


<?php
require_once __DIR__ ."/../app/controllers/clienteController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];



?>

<a href="cliente">cliente</a>

<?php 

if ($method === 'GET' && $uri ==="/cliente"){
$clienteController= new clienteController();
$clienteController->index();

}

?>

<?php 

require_once __DIR__ ."/../app/controllers/habitacionController.php";
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


?>

<a href="habitacion">habitacion</a>

<?php 

if ($method === 'GET' && $uri ==="/habitacion"){
$habitacionController= new habitacionController();
$habitacionController->index();
}

?>

