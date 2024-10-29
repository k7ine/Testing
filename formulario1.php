<!--

Calculadora Simple: Diseña un formulario que permita a los usuarios ingresar dos números 
y seleccionar una operación (suma, resta, multiplicación, división). 
Al enviar el formulario, muestra el resultado de la operación seleccionada.

-->

<body>
    <h1>Calculadora</h1>
    <form action="registro1.php" method="post">
        <label for="num1">Número 1</label><br>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Número 2</label><br>
        <input type="number" name="num2" required><br><br>

        <select name="menu" required>
            <option value="">Seleccione una operación</option>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicación</option>
            <option value="/">División</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>


