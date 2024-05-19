<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli('localhost', 'root', '', 'futbol');
if ($con->connect_error) {
    die('Error de conexión: ' . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['player_name'];
    $nationality = $_POST['nationality'];
    $date_of_birth = $_POST['date_of_birth'];
    $team = $_POST['team'];
    $thumb = $_POST['thumb'];

    $stmt = $con->prepare("INSERT INTO players (name, nationality, date_of_birth, team, thumb) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $nationality, $date_of_birth, $team, $thumb);
    $stmt->execute();
    $stmt->close();

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Jugador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jugador Guardado</h1>
        <p>Jugador guardado exitosamente. ¿Deseas <a href="index.php">añadir más jugadores</a>?</p>
    </div>
</body>
</html>
