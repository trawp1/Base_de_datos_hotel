<h1>Crear ciudad</h1>

<form action="/base_de_datos_hotel/public/ciudad" method="post">

    <label>nombre_ciudad:</label>
    <input type="text" name="nombre_ciudad" required>

    <br><br>

    <label>departamento:</label>
    <input type="text" name="departamento" required>

    <br><br>

    <button type="submit">Guardar ciudad</button>

</form>

<br>

<a href="/base_de_datos_hotel/public/cliente">
    Volver a clientes
</a>