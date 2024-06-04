<!-- views/employee/create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form action="index.php?controller=employee&action=create" method="POST">
        <label for="Apellidos">Apellidos:</label><br>
        <input type="text" id="Apellidos" name="Apellidos"><br>

        <label for="Nombres">Nombres:</label><br>
        <input type="text" id="Nombres" name="Nombres"><br>

        <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento"><br>

        <label for="Edad">Edad:</label><br>
        <input type="text" id="Edad" name="Edad"><br>

        <label for="Ciudad_Nacimiento">Ciudad de Nacimiento:</label><br>
        <input type="text" id="Ciudad_Nacimiento" name="Ciudad_Nacimiento"><br>

        <label for="Sexo">Sexo:</label><br>
        <input type="text" id="Sexo" name="Sexo"><br>

        <label for="Estado_Civil">Estado Civil:</label><br>
        <input type="text" id="Estado_Civil" name="Estado_Civil"><br>

        <label for="DNI_CE">DNI/CE:</label><br>
        <input type="text" id="DNI_CE" name="DNI_CE"><br>

        <label for="Numero_Hijos">Número de Hijos:</label><br>
        <input type="number" id="Numero_Hijos" name="Numero_Hijos"><br>

        <label for="Discapacidad">Discapacidad:</label><br>
        <input type="checkbox" id="Discapacidad" name="Discapacidad" value="1"><br>

        <label for="Tipo_Discapacidad">Tipo de Discapacidad:</label><br>
        <input type="text" id="Tipo_Discapacidad" name="Tipo_Discapacidad"><br>

        <label for="Observaciones">Observaciones:</label><br>
        <textarea id="Observaciones" name="Observaciones"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
