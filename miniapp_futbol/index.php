<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App de Búsqueda de Jugadores de Fútbol</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
        
            width: 100%;
            margin: auto;
            margin-top: 300px;
            overflow: hidden;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .search-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .search-container form {
            display: flex;
            width: 100%;
            max-width: 300px;
        }
        .search-container input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
        }
        .search-container button {
            padding: 10px 15px;
            margin-left: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        #results, #saved-searches {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .player-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .player-card img {
            max-width: 100px;
            border-radius: 50%;
        }
        .player-card h3 {
            margin: 10px 0 5px;
        }
        .player-card p {
            margin: 0;
            color: #666;
        }
        .saved-item {
            padding: 10px;
            margin: 5px 0;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>App de Búsqueda de Jugadores de Fútbol</h1>
        <div class="search-container">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Nombre del jugador">
                <button type="submit" name="search">Buscar</button>
                <button type="button" name="save" onclick="javascript:window.open ('formulario.php')" >Búsquedas guardadas</button>
            </form>
        </div>
    
      
    </div>
</body>
</html>
