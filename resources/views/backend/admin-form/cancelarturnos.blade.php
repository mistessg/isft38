<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('eliminarDatos') }}" method="POST" id="eliminarForm">
        @csrf
        <div>
            <label for="hash">Ingrese el Hash:</label>
            <input type="text" name="hash" id="hash" required>
        </div>
        <br>
        <button type="button" onclick="confirmarEliminar()">CANCELAR TURNO</button>
    </form>

    <script>
        function confirmarEliminar() {
            if (confirm("¿Estás seguro de que deseas eliminar los datos?")) {
                document.getElementById("eliminarForm").submit();
            }
        }
    </script>

</body>
</html>
