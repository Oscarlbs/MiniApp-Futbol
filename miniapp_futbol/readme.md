

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

# Pantalla Principal 

![Captura de pantalla (87)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/7eda29e8-e7ad-4302-9a12-69964a36b5a3)

# Busqueda de jugadores con botón para guardarlos

![Captura de pantalla (88)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/7a56ab52-8f19-47cb-947e-93748c96e1ca)

#  Al accionar el botón 

![Captura de pantalla (89)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/58026560-6373-4e2a-8ffd-7769116a4d4d)

#  Mis jugadores guardados

![Captura de pantalla (90)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/f8c4f6e9-b4f2-424e-a5b2-820d3e461f10)

#  Base de datos con los jugadores añadidos 

![Captura de pantalla (91)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/8522c8e5-2546-46a7-8a0d-16f6e9e806b4)





