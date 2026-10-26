<h1>Crear cliente</h1>

<form action="/base_de_datos_hotel/public/cliente" method="post">

    <label>Documento:</label>
    <input type="text" name="documento" required>

    <br><br>

    <label>Nombres:</label>
    <input type="text" name="nombres" required>

    <br><br>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono">

    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo">

    <br><br>

    <label>Fecha de llegada:</label>
    <input type="date" name="fecha_de_llegada">

    <br><br>

    <label>ID Ciudad:</label>
    <input type="number" name="id_ciudad">

    <br><br>

    <button type="submit">Guardar cliente</button>

</form>

<br>

<a href="/base_de_datos_hotel/public/cliente">
    Volver a clientes
</a>