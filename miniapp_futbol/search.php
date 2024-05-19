<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli('localhost', 'root', '', 'futbol');
if ($con->connect_error) {
    die('Error de conexión: ' . $con->connect_error);
}

if (isset($_GET['search'])) {
    $query = urlencode($_GET['query']);
    $teamName = ""; // No especificado en la pregunta
    $apiKey = 3;
    $url = "https://www.thesportsdb.com/api/v1/json/{$apiKey}/searchplayers.php?t={$teamName}&p={$query}";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    $output = '';

    if ($data && isset($data['player'])) {
        $count = 0;
        $output .= '<div id="results">';
        $output .= '<h2></h2>';
        foreach ($data['player'] as $player) {
            if ($count < 5 && $player['strSport'] == 'Soccer') {
                // Generar la tarjeta del jugador
                $output .= '<div class="player-card">';
                $output .= '<img src="' . $player['strThumb'] . '" alt="' . $player['strPlayer'] . '" class="player-image">';
                $output .= '<div class="player-details">';
                $output .= '<h3>' . $player['strPlayer'] . '</h3>';
                $output .= '<p><strong>Nacionalidad:</strong> ' . $player['strNationality'] . '</p>';
                $output .= '<p><strong>Fecha de Nacimiento:</strong> ' . $player['dateBorn'] . '</p>';
                $output .= '<p><strong>Equipo Actual:</strong> ' . $player['strTeam'] . '</p>';
                $output .= '</div>'; // Cierre de player-details
                // Botón de guardar
                $output .= '<form action="save_player.php" method="POST" style="text-align:center;">';
                $output .= '<input type="hidden" name="player_name" value="' . $player['strPlayer'] . '">';
                $output .= '<input type="hidden" name="nationality" value="' . $player['strNationality'] . '">';
                $output .= '<input type="hidden" name="date_of_birth" value="' . $player['dateBorn'] . '">';
                $output .= '<input type="hidden" name="team" value="' . $player['strTeam'] . '">';
                $output .= '<input type="hidden" name="thumb" value="' . $player['strThumb'] . '">';
                $output .= '<button type="submit" class="btn-save">Guardar</button>';
                $output .= '</form>';
                $output .= '</div>'; // Cierre de player-card
                $count++;
            }
        }
        if ($count == 0) {
            $output .= '<div class="no-results">No se encontraron jugadores de fútbol.</div>';
        }
        $output .= '</div>'; // Cierre del contenedor de resultados
    } else {
        $output .= '<div class="no-results">No se encontraron resultados.</div>';
    }

    echo $output;
}
?>
<html>
<a href="index.php" class="btn-back">Volver a Inicio</a>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .player-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        margin: 20px;
        width: 300px;
        display: inline-block;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .player-image {
        max-width: 100%;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .player-details h3 {
        margin-top: 0;
        color: #333;
    }
    .player-details p {
        margin: 5px 0;
        color: #666;
    }
    .no-results {
        text-align: center;
        color: #555;
        margin-top: 20px;
    }
    .btn-back {
        display: block;
        margin-top: 20px;
        text-align: center;
        text-decoration: none;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        width: 200px;
        margin: 20px auto;
    }
    .btn-back:hover {
        background-color: #0056b3;
    }
    .btn-save {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 8px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-save:hover {
        background-color: #218838;
    }
</style>
