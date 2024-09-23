<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://www.redacademica.edu.co/sites/default/files/2022-04/Escudo%20Rufino%20IED.jpg">
    <style>
        body {
            background-image: url('tripulación.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            margin: 0;
        }
        h1 {
            font-size: 36px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            background-color: rgba(34, 34, 34, 0.8);
            border: 2px solid #800080; /* Borde acorde al tema */
        }
        th, td {
            border: 1px solid #800080;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #800080;
            color: white;
        }
        .button {
            background-color: #800080;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #a64ca6;
        }
    </style>
</head>
<body>
    <h1>Registro exitoso!! ¡Ahora haces parte de esta tripulación!</h1>

    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>User Key</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $servername = "sql309.infinityfree.com";  
            $username = "if0_37229230";
            $password = "poubdZSEAM";
            $dbname = "if0_37229230_usuarios";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            // Consulta para obtener todos los registros
            $sql = "SELECT usuario, user_key, curso FROM usuarios";
            $result = $conn->query($sql);

            // Mostrar los registros en la tabla
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row['usuario']) . "</td><td>" . htmlspecialchars($row['user_key']) . "</td><td>" . htmlspecialchars($row['curso']) . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay registros disponibles.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <a href="base.html" class="button">Regresar</a>
</body>
</html>

