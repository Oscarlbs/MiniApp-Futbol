

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

1. Descargar el archivo, descomprimir, y sacar la carpeta miniapp_futbol.
2. Abrir la carpeta en un editor de código (Visual Studio Code, Intellij...)
3. Instalar XAMPP.
4. Clonar el proyecto en la raíz del servidor XAMPP. (Disco local/xampp/htdocs/...) Mueve la carpeta (miniapp_futbol) a esta ubicación.
5. Abrir XAMPP y hacer clic en el botón de inicio. (Arrancar Apache y Mysql)
6. Importar el archivo SQL desde la carpeta de base de datos al servidor XAMPP. (http://localhost/phpmyadmin/index.php) (Ahi crear una nueva base con el nombre futbol e importar el archivo sql del proyecto).
7. Abrir el navegador e ir a http://localhost/miniapp_futbol_entrega/index.php.

Listo!! El proyecto funcionará y podrás usar todas las funcionalidades!

# Pantalla Principal 

![Captura de pantalla (87)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/806d103e-279a-4941-a902-af871f32d4ee)

# Busqueda de jugadores con botón para guardarlos

![Captura de pantalla (88)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/575517d6-74aa-4ca8-a470-bd0cad4d6579)

#  Al accionar el botón 

![Captura de pantalla (89)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/649063cc-698f-4bf1-9498-ac5ee2969d4f)

#  Mis jugadores guardados

![Captura de pantalla (90)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/05b875e9-10a8-4026-824a-47f1a9c8e0e8)

#  Base de datos con los jugadores añadidos 

![Captura de pantalla (91)](https://github.com/Oscarlbs/MiniApp-Futbol/assets/91658943/c39be684-1869-450f-ad6d-05b6e5a9bc34)






