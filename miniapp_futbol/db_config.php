<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost','root','','futbol');
    if(!$con)
    {
        die('Error de conexión: ' . $mysqli->connect_error);
    
    }
?>