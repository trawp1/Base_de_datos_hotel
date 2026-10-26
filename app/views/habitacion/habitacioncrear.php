<h1>Crear habitación</h1>

<form action="/base_de_datos_hotel/public/habitacion" method="post">

    <label>Número de habitación:</label>
    <input type="number" name="numero_de_habitacion" required>

    <br><br>

    <label>Disponibilidad:</label>
    <input type="text" name="disponibilidad" required>

    <br><br>

    <label>Tipo de pago:</label>
    <input type="text" name="tipo_de_pago" required>

    <br><br>

    <label>Monto a pagar:</label>
    <input type="number" name="monto_a_pagar">

    <br><br>

    <label>Cantidad de personas:</label>
    <input type="number" name="cantidad_de_personas">

    <br><br>

    <label>Reservada:</label>
    <input type="text" name="reservada">

    <br><br>

    <label>Cantidad de toallas:</label>
    <input type="number" name="cantidad_de_toallas">

    <br><br>

    <label>Documento del cliente:</label>
    <input type="number" name="documentos">

    <br><br>

    <button type="submit">Guardar habitación</button>

</form>

<br>

<a href="/base_de_datos_hotel/public/habitacion">
    Volver a habitaciones
</a>