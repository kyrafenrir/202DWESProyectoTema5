<?php
    /**
     * @author Alvaro Cordero Miñambres
     * @version 1.0
     * @since 21/11/2023
     */

    // REALIZAR CAMBIO PARA QUE SI RELLENAS MAL LA VENTANA EMERGENTE NO ENTRE EN EL EJERCICIO

    /**
     * @link https://www.php.net/manual/en/reserved.variables.server
     * 
     * $_SERVER['PHP_AUTH_USER'] -> se utiliza para obtener el nombre de usuario proporcionado por el cliente durante el proceso de autenticación HTTP básica.
     * $_SERVER['PHP_AUTH_PW'] -> se utiliza en el contexto de la autenticación básica HTTP. Esta variable contiene la contraseña proporcionada por el usuario  *durante el proceso de autenticación.
     */
    //Si el usuario no es PEPE y la contrasena no es paso y  ninguna de las variables esta vacio o es null entramos en el if
    if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != 'pepe' || $_SERVER['PHP_AUTH_PW'] != 'paso') {
        /**
         * @link https://www.php.net/manual/es/function.header.php
         * 
         * Cuando el navegador recibe este encabezado, mostrará un cuadro de diálogo de inicio de sesión al usuario, solicitándole un nombre de usuario y una  *contraseña. El usuario debe proporcionar las credenciales correctas para acceder al recurso protegido.
         */
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');

        /**
         * @link https://developer.mozilla.org/es/docs/Web/HTTP/Status/401
         * 
         * Cuando un cliente realiza una solicitud a un recurso protegido y no proporciona credenciales válidas o no proporciona credenciales en absoluto, el  * *servidor puede responder con el código de estado 401 y el encabezado WWW-Authenticate para indicar al cliente que se requiere autenticación.
         */
        header('HTTP/1.0 401 Unauthorized');
        
        //Mostramos un error de autenticacion
        echo("<h2>Error!!</h2><br>");

        /**
         *@link https://www.php.net/manual/es/function.exit.php
         * 
         *La función exit en PHP se utiliza para finalizar la ejecución del script inmediatamente en el punto donde se llama
         */
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../webroot/css/style.css">
        <title>DWES</title>
    </head>
    <body>
        <header>
            <h1>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h1>
        </header>
        <main>
            <p>Bienvenido, te has autentificado correctamente.</p>
            <?php
                //Mostramos por pantalla los datos el usuario

                //Muestro el usuario
                echo "<p>Nombre de usuario ". $_SERVER['PHP_AUTH_USER']."</p>";

                //Muestro la password
                echo "<p>Password: ".$_SERVER['PHP_AUTH_PW']."</p>";
            ?>
        </main>
        <footer>
            <p>2023-2024 © Todos los derechos reservados. <a href="../indexProyectoTema5.php">Erika Martínez Pérez</a></p>
        </footer>
    </body>
</html>
