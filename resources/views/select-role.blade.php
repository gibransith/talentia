<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selección de Rol</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        .options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .option {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s, transform 0.2s;
        }

        .option:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selecciona tu rol</h1>
        <div class="options">
            <button class="option" onclick="seleccionarRol('estudiante')">
                <i class="fas fa-user-graduate icon"></i>
                Estudiante
            </button>
            <button class="option" onclick="seleccionarRol('empresa')">
                <i class="fas fa-building icon"></i>
                Empresa
            </button>
        </div>
    </div>

    <script>
        function seleccionarRol(rol) {
            if (rol === 'estudiante') {
                // Redirige o realiza acciones para usuarios estudiantes
            } else if (rol === 'empresa') {
                // Redirige o realiza acciones para usuarios de empresas
            }
        }
    </script>
</body>
</html>
