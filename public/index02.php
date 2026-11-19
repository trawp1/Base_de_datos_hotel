<a href="/base_de_datos_hotel/public/cliente">cliente</a>
<a href="/Base_de_datos_hotel/public/ciudad">Ciudad</a>
<a href="/base_de_datos_hotel/public/habitacion">habitacion</a>



<?php

require_once __DIR__ . "/../app/controllers/ciudadcontroller.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

switch ($uri) {

    case '/base_de_datos_hotel/public/ciudad':

        if ($method === 'GET') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->index();
            exit;
        }

        if ($method === 'POST') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->guardar();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/ciudad/crear':

        if ($method === 'GET') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->crear();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/ciudad/editar':

        if ($method === 'GET') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->mostrarEditar();
            exit;
        }

        if ($method === 'POST') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->editarTodas();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/ciudad/eliminar':

        if ($method === 'POST') {
            $ciudadController = new ciudadcontroller();
            $ciudadController->eliminar();
            exit;
        }
        break;

    default:
        http_response_code(404);
        echo "Ruta no encontrada: " . htmlspecialchars($uri);
        break;
}
?>


<?php

require_once __DIR__ . "/../app/controllers/habitacioncontroller.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

switch ($uri) {

    /* --- HABITACION --- */

    case '/base_de_datos_hotel/public/habitacion':

        if ($method === 'GET') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->index();
            exit;
        }

        if ($method === 'POST') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->guardar();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/habitacion/crear':

        if ($method === 'GET') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->crear();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/habitacion/editar':

        if ($method === 'GET') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->mostrareditar();
            exit;
        }

        if ($method === 'POST') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->editartodas();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/habitacion/eliminar':

        if ($method === 'POST') {
            $habitacionController = new habitacioncontroller();
            $habitacionController->eliminar();
            exit;
        }
        break;

    default:
        http_response_code(404);
        echo "Ruta no encontrada: " . htmlspecialchars($uri);
        break;
}

?>




<?php

require_once __DIR__ . "/../app/controllers/clienteController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

switch ($uri) {


    case '/base_de_datos_hotel/public/cliente':

        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->index();
            exit;
        }

        if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->guardar();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/cliente/crear':

        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->crear();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/cliente/editar':

        if ($method === 'GET') {
            $clienteController = new clienteController();
            $clienteController->mostrareditar();
            exit;
        }

        if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->editartodas();
            exit;
        }
        break;

    case '/base_de_datos_hotel/public/cliente/eliminar':

        if ($method === 'POST') {
            $clienteController = new clienteController();
            $clienteController->eliminar();
            exit;
        }
        break;

    default:
        http_response_code(404);
        echo "Ruta no encontrada: " . htmlspecialchars($uri);
        break;
}

?>




/*

<br><br>
<?php
$frutas = ["Manzana", "Pera", "Mango"];
echo $frutas[0];
echo "<br>";
echo $frutas[2];

?>

<br><br>

<?php

$lenguajes = ["PHP", "JavaScript", "Python", "Java", "C++"];

echo "Segundo lenguaje: " . $lenguajes[1];
echo "<br>";

echo "Quinto lenguaje: " . $lenguajes[4];
echo "<br>";

echo "Primer lenguaje: " . $lenguajes[0];

?>
<br><br>
<?php

$categorias = ["Bebidas", "Alimentos", "Electrodomésticos", "Ropa"];

echo "La tercera categoría es: " . $categorias[2];

?>


<br><br>

<?php

$producto = [
    "nombre" => "Mouse",
    "precio" => 35000,
    "stock" => 12
];

echo $producto["nombre"];
echo "<br>";

echo $producto["precio"];

?>

<br><br><br>

<?php

$aprendiz = [
    "nombre" => "Jhon Alejandro Tabares Morera",
    "ficha" => 228118,
    "programa" => "ADSO",
    "edad" => 22
];

echo "Nombre del aprendiz: " . $aprendiz["nombre"];
echo "<br>";

echo "Programa de formación: " . $aprendiz["programa"];

?>

<br><br>

<?php

$proveedor = [
    "nombre" => "Carlos Rodríguez",
    "ciudad" => "Bogotá",
    "telefono" => "3001234567",
    "correo" => "carlos@gmail.com"
];

echo "Nombre del proveedor: " . $proveedor["nombre"];
echo "<br>";

echo "Ciudad: " . $proveedor["ciudad"];

?>


<br><br>
<?php
$producto = [
    "nombre" => "Teclado",
    "precio" => 60000
];

$producto["precio"] = 55000;

$producto["stock"] = 8;

echo $producto["nombre"];
echo "<br>";

echo $producto["precio"];
echo "<br>";

echo $producto["stock"];

?>



<br><br>
<?php

$producto = [
    "nombre" => "Mouse",
    "precio" => 35000,
    "cantidad" => 12
];

$producto["precio"] = 30000;

$producto["cantidad"] = 20;

$producto["categoria"] = "Accesorios";

echo "Nombre: " . $producto["nombre"];
echo "<br>";

echo "Precio: " . $producto["precio"];
echo "<br>";

echo "Cantidad disponible: " . $producto["cantidad"];
echo "<br>";

echo "Categoría: " . $producto["categoria"];

?>

<br><br>

<?php

$marcas = ["HP", "Lenovo", "Dell"];

$marcas[] = "Asus";
$marcas[] = "Acer";

echo "Marcas de computadores:";
echo "<br>";

echo $marcas[0];
echo "<br>";

echo $marcas[1];
echo "<br>";

echo $marcas[2];
echo "<br>";

echo $marcas[3];
echo "<br>";

echo $marcas[4];

?>

<br><br>
<?php

$productos = [
    [
        "nombre" => "Mouse",
        "precio" => 35000,
        "cantidad" => 10
    ],
    [
        "nombre" => "Teclado",
        "precio" => 60000,
        "cantidad" => 15
    ],
    [
        "nombre" => "Monitor",
        "precio" => 450000,
        "cantidad" => 5
    ]
];

echo "Nombre del segundo producto: " . $productos[1]["nombre"];
echo "<br>";

echo "Precio del tercer producto: " . $productos[2]["precio"];
echo "<br>";

echo "Cantidad disponible del primer producto: " . $productos[0]["cantidad"];

?>
<br><br>

<?php

$aprendices = [
    [
        "nombre" => "Carlos",
        "ficha" => 228118,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "María",
        "ficha" => 228119,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Andrés",
        "ficha" => 228120,
        "programa" => "ADSO"
    ]
];

echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"];
echo "<br>";

echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"];

?>
<br><br>
<?php

$producto = [
    "nombre" => "Monitor",
    "precio" => 750000,
    "proveedor" => [
        "nombre" => "Tecnología SAS",
        "ciudad" => "Bogotá"
    ]
];

echo $producto["nombre"];
echo "<br>";

echo $producto["proveedor"]["nombre"];
echo "<br>";

echo $producto["proveedor"]["ciudad"];

?>
<br><br>
<?php

$aprendiz = [
    "nombre" => "Carlos",
    "edad" => 22,
    "contacto" => [
        "correo" => "carlos@gmail.com",
        "telefono" => "3001234567"
    ]
];

echo "Nombre del aprendiz: " . $aprendiz["nombre"];
echo "<br>";

echo "Correo electrónico: " . $aprendiz["contacto"]["correo"];

?>
<br><br>
<?php

$producto = [
    "nombre" => "Computador",
    "precio" => 2500000,
    "fabricante" => [
        "nombre" => "Samsung",
        "pais" => "Corea del Sur"
    ]
];

echo "Nombre del producto: " . $producto["nombre"];
echo "<br>";

echo "País de origen: " . $producto["fabricante"]["pais"];

?>

<br><br>
Alternativa 1. Condiciones if / elseif
<?php
$accion = "listar";
if ($accion === "crear") {
    echo "Formulario de creación";
} elseif ($accion === "listar") {
    echo "Listado de productos";
} elseif ($accion === "eliminar") {
    echo "Eliminar producto";
} else {
    echo "Acción no encontrada";
}

?>
<br>


echoAlternativa 2. Instrucción switch

<br><br>
<?php
$accion = "listar";

switch ($accion) {
    case "crear":
        echo "Formulario de creación";
        break;

    case "listar":
        echo "Listado de productos";
        break;

    case "eliminar":
        echo "Eliminar producto";
        break;

    default:
        echo "Acción no encontrada";
}
?>
<br><br>
<?php

$metodo = $_SERVER['REQUEST_METHOD'];
$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);
echo "Método HTTP: " . $metodo;
echo "<br>";
echo "Ruta solicitada: " . $uri;

?>
*/