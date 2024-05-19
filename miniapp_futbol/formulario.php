<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli('localhost', 'root', '', 'futbol');
if ($con->connect_error) {
    die('Error de conexión: ' . $con->connect_error);
}

// Recuperar datos de la base de datos
$result = $con->query("SELECT name, nationality, date_of_birth, team, thumb FROM players");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores Guardados</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 40px;
        }
        .btn-back {
            display: block;
            margin: 20px auto;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            width: 200px;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
        .player-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            width: 300px;
            display: inline-block;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .player-card:hover {
            transform: translateY(-5px);
        }
        .player-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .player-details h3 {
            margin-top: 0;
            color: #007bff;
        }
        .player-details p {
            margin: 5px 0;
        }
        .no-results {
            text-align: center;
            color: #555;
            margin-top: 20px;
        }
        #saved-players {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mis Jugadores Guardados</h1>
        <a href="index.php" class="btn-back">Volver a Inicio</a>
        <div id="saved-players">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="player-card">';
                    echo '<img src="' . $row['thumb'] . '" alt="' . $row['name'] . '" class="player-image">';
                    echo '<div class="player-details">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p><strong>Nacionalidad:</strong> ' . $row['nationality'] . '</p>';
                    echo '<p><strong>Fecha de Nacimiento:</strong> ' . $row['date_of_birth'] . '</p>';
                    echo '<p><strong>Equipo Actual:</strong> ' . $row['team'] . '</p>';
                    echo '</div>'; // Cierre de player-details
                    echo '</div>'; // Cierre de player-card
                }
            } else {
                echo '<div class="no-results">No se encontraron jugadores guardados.</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
