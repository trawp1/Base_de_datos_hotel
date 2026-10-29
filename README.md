# Taller de auditoría técnica y fortalecimiento CRUD en PHP MVC

## 1. Nombre completo del aprendiz

Jhon Alejandro Tabares Morera

## 2. Nombre del proyecto

Base de datos hotel — Gestión de ciudades mediante PHP MVC.

## 3. Fecha de desarrollo del taller

29 de octubre de 2026.

## 4. Descripción breve de las mejoras implementadas o verificadas

Se revisó el funcionamiento del CRUD de ciudades, identificando los componentes que intervienen en la consulta y eliminación de registros. Se analizó la importancia de solicitar confirmación antes de eliminar, validar los identificadores y utilizar el método POST para realizar operaciones que modifican la información.

## 5. Archivos principales modificados

- `app/views/ciudad/index.php`: vista del listado de ciudades.
- `public/index.php`: enrutador principal de la aplicación.
- `app/controllers/ciudadcontroller.php`: controlador de las operaciones de ciudad.
- Modelo de ciudad: consultas a la base de datos mediante PDO.



## 6. Resultado general de los cinco casos de prueba

- **CP-01:** comprobar que cancelar la eliminación conserve el registro.
- **CP-02:** comprobar que aceptar elimine el registro correctamente.
- **CP-03:** comprobar que un identificador inválido sea rechazado.
- **CP-04:** comprobar que un registro inexistente sea controlado sin afectar otros registros.
- **CP-05:** comprobar que el listado refleje correctamente los cambios.

Los resultados definitivos se registrarán después de ejecutar las cinco pruebas en la aplicación.

## 7. Instrucciones mínimas para ejecutar la aplicación localmente

1. Instalar e iniciar XAMPP.
2. Activar los servicios Apache y MySQL.
3. Colocar el proyecto en la carpeta `htdocs` de XAMPP.
4. Abrir phpMyAdmin y comprobar que la base de datos del proyecto esté creada e importada.
5. Verificar la configuración de conexión a la base de datos.
6. Abrir el navegador e ingresar a:

   `http://localhost/Base_de_datos_hotel/public/`

7. Probar el listado de ciudades y las operaciones disponibles.

