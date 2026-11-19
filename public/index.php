
<?php

require_once __DIR__ . "/../app/controllers/ciudadcontroller.php";
require_once __DIR__ . "/../app/controllers/habitacioncontroller.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";

$rutas = require dirname(__DIR__) . '/rutas/web.php';

$method = $_SERVER['REQUEST_METHOD'];

$uri = $_SERVER['REQUEST_URI'];

$ruta = strtolower(parse_url($uri, PHP_URL_PATH));

?>


<a href="/base_de_datos_hotel/public/cliente">cliente</a>
<a href="/Base_de_datos_hotel/public/ciudad">Ciudad</a>
<a href="/base_de_datos_hotel/public/habitacion">habitacion</a>



<?php
$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento !== null) {

    $ncontrolador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $ncontrolador();

    $controlador->$nMetodo();

} else {

    http_response_code(404);
    echo "ERROR 404. Ruta no encontrada: " . htmlspecialchars($ruta);

}

?>






