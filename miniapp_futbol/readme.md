

# Mini Aplicación de Búsqueda y Guardado de Jugadores de Fútbol

Esta es una mini aplicación web desarrollada en PHP que te permite buscar jugadores de fútbol utilizando la API de TheSportsDB y guardar la información de los jugadores encontrados en una base de datos MySQL.

# Funcionamiento

La aplicación consta de dos partes principales:

1. Búsqueda de Jugadores:

Utiliza la API de TheSportsDB para buscar jugadores de fútbol según el nombre ingresado.
Muestra los resultados de la búsqueda en tarjetas de jugador, que incluyen información como el nombre del jugador, nacionalidad, fecha de nacimiento y equipo actual.
Cada tarjeta de jugador tiene un botón "Guardar" que permite almacenar la información del jugador en la base de datos.

2. Guardar Jugadores:

Cuando se presiona el botón "Guardar" en una tarjeta de jugador, se almacena la información del jugador en la base de datos local.
La página Guardar Jugadores muestra una lista de los jugadores guardados, con sus respectivas tarjetas de información.

# Requisitos

- PHP instalado en el servidor (versión 7.0 o superior).
- Servidor web (por ejemplo, Apache o Nginx) para ejecutar la aplicación localmente.
- Base de datos MySQL para almacenar la información de los jugadores.

# Ejecución

1. Descargar el archivo y abrir la carpeta en un editor de código (Visual Studio Code, Intellij...)
2. Instalar XAMPP.
3. Abrir XAMPP y hacer clic en el botón de inicio. (Arrancar Apache y Mysql)
3. Clonar el proyecto en la raíz del servidor XAMPP. (Disco local/xampp/htdocs/...) Mueve la carpeta a esta ubicación.
4. Importar el archivo SQL desde la carpeta de base de datos al servidor XAMPP. (http://localhost/phpmyadmin/index.php) (Ahi crear una nueva base con el nombre futbol e importar el archivo sql del proyecto).
5. Abrir el navegador e ir a http://localhost/miniapp_futbol_entrega/index.php.

Listo!! El proyecto funcionará y podrás usar todas las funcionalidades!
![Captura de pantalla (90)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/6e2f9792-91aa-4458-9454-9b596d585ad7)
![Captura de pantalla (89)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/09615185-480b-44be-88cc-77b7b748afb8)
![Captura de pantalla (88)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/617bd09a-29d9-4cf3-8a22-895731450e14)
![Captura de pantalla (87)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/f18e03c4-08f6-450b-b766-98e624d598f6)
![Captura de pantalla (91)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/ae0cbb17-10eb-458c-8470-2bfa50337183)
