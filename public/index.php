<a href="/base_de_datos_hotel/public/cliente">cliente</a>
<a href="/Base_de_datos_hotel/public/ciudad">Ciudad</a>
<a href="/base_de_datos_hotel/public/habitacion">habitacion</a>

/*
todo sobre ciudad
*/


<?php

require_once __DIR__ . "/../app/controllers/ciudadcontroller.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$ciudadController = new ciudadcontroller();

if (
    $method === 'GET' &&
    $uri === '/Base_de_datos_hotel/public/ciudad'
) {
    $ciudadController->index();
} elseif (
    $method === 'GET' &&
    $uri === '/Base_de_datos_hotel/public/ciudad/crear'
) {
    $ciudadController->crear();
} elseif (
    $method === 'POST' &&
    $uri === '/Base_de_datos_hotel/public/ciudad'
) {
    $ciudadController->guardar();
} elseif (
    $method === 'GET' &&
    $uri === '/Base_de_datos_hotel/public/ciudad/editar'
) {
    $ciudadController->mostrarEditar();
} elseif (
    $method === 'POST' &&
    $uri === '/Base_de_datos_hotel/public/ciudad/editar'
) {
    $ciudadController->editarTodas();
 
  }elseif (
    $method === 'POST' &&
    strtolower($uri) === '/base_de_datos_hotel/public/ciudad/eliminar'
) {
    $ciudadController = new ciudadcontroller();
    $ciudadController->eliminar();
}
 else {
    echo "Ruta no encontrada: " . htmlspecialchars($uri);
}

?>


/*
todo sobre habitacion
*/


<?php

require_once __DIR__ . "/../app/controllers/habitacioncontroller.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/habitacion'
) {
    $habitacionController = new habitacioncontroller();
    $habitacionController->index();
} elseif (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/habitacion/crear'
) {
    $habitacionController = new habitacioncontroller();
    $habitacionController->crear();
} elseif (
    $method === 'POST' &&
    $uri === '/base_de_datos_hotel/public/habitacion'
) {
    $habitacionController = new habitacioncontroller();
    $habitacionController->guardar();
} elseif (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/habitacion/editar'
) {
    $habitacionController = new habitacioncontroller();
    $habitacionController->mostrareditar();
} elseif (
    $method === 'POST' &&
    $uri === '/base_de_datos_hotel/public/habitacion/editar'
) {
    $habitacionController = new habitacioncontroller();
    $habitacionController->editartodas();
} else {
    http_response_code(404);
    echo "Ruta no encontrada: " . htmlspecialchars($uri);
}
?>




/*
todo sobre clientes
*/

<?php

require_once __DIR__ . "/../app/controllers/clienteController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/cliente'
) {
    $clienteController = new clienteController();
    $clienteController->index();
} elseif (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/cliente/crear'
) {
    $clienteController = new clienteController();
    $clienteController->crear();
} elseif (
    $method === 'POST' &&
    $uri === '/base_de_datos_hotel/public/cliente'
) {
    $clienteController = new clienteController();
    $clienteController->guardar();
} elseif (
    $method === 'GET' &&
    $uri === '/base_de_datos_hotel/public/cliente/editar'
) {
    $clienteController = new clienteController();
    $clienteController->mostrareditar();
} elseif (
    $method === 'POST' &&
    $uri === '/base_de_datos_hotel/public/cliente/editar'
) {
    $clienteController = new clienteController();
    $clienteController->editartodas();
} else {
    http_response_code(404);
    echo "Ruta no encontrada: " . htmlspecialchars($uri);
}
?>