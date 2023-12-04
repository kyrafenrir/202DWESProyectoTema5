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
            <h1>0. Mostrar el contenido de las variables superglobales y phpinfo().</h1>
        </header>
        <main>
            <?php
                /**
                * Author:  Erika Martínez Pérez
                * @version 1.0
                * @since 27/10/2023
                */
                
                $key = "";
                $value = "";
                echo "<div>";
                echo ("<h2>Variables superglobales: </h2>");
                echo("<p>Contenido de <strong>".'$GLOBALS'."</strong> es de tipo <strong>".gettype($GLOBALS)."</strong> y tiene el valor ".print_r($GLOBALS)."</p>");
                echo("</p>");
                echo("<p>Contenido de <strong>".'$_SERVER'."</strong> es de tipo <strong>".gettype($_SERVER)."</strong> y contiene: <br><br>");
                foreach ($_SERVER as $key => $value) {
                    echo "{$key} => {$value}<br>";
                }
                if(isset($_SESSION)) {
                    echo("<p>Contenido de <strong>".'$_SESSION'."</strong> es de tipo <strong>".gettype($_SESSION)."</strong> y contiene: <br><br>");
                    foreach ($_SESSION as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                }else {
                    echo("<p>Contenido de <strong>".'$_SESSION'."</strong> esta vacia.");
                }
                echo("</p>");
                if (empty($_COOKIE)) {
                    echo("<p>Contenido de <strong>".'$_COOKIE'."</strong> es de tipo <strong>".gettype($_COOKIE)."</strong> y contiene: <br><br>");
                    foreach ($_COOKIE as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                    echo("<p>Contenido de <strong>".'$_COOKIE'."</strong> esta vacia.");
                }
                echo("</p>");
                if (is_null($_GET)) {
                    echo("<p>Contenido de <strong>".'$_GET'."</strong> es de tipo <strong>".gettype($_GET)."</strong> y contiene: <br><br>");
                    foreach ($_GET as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                    echo("<p>Contenido de <strong>".'$_GET'."</strong> esta vacia.");
                }
                echo("</p>");
                if (is_null($_POST)) {
                    echo("<p>Contenido de <strong>".'$_POST'."</strong> es de tipo <strong>".gettype($_POST)."</strong> y contiene: <br><br>");
                    foreach ($_POST as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                    echo("<p>Contenido de <strong>".'$_POST'."</strong> esta vacia.");
                }
                echo("</p>");
                if (is_null($_FILES)) {
                    echo("<p>Contenido de <strong>".'$_FILES'."</strong> es de tipo <strong>".gettype($_FILES)."</strong> y contiene: <br><br>");
                    foreach ($_FILES as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                   echo("<p>Contenido de <strong>".'$_FILES'."</strong> esta vacia.");
                }
                echo("</p>");
                if (is_null($_REQUEST)) {
                    echo("<p>Contenido de <strong>".'$_REQUEST'."</strong> es de tipo <strong>".gettype($_REQUEST)."</strong> y contiene: <br><br>");
                    foreach ($_REQUEST as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                    echo("<p>Contenido de <strong>".'$_REQUEST'."</strong> esta vacia.");
                }
                echo("</p>");
                if (is_null($_ENV)) {
                    echo("<p>Contenido de <strong>".'$_ENV'."</strong> es de tipo <strong>".gettype($_ENV)."</strong> y contiene: <br><br>");
                    foreach ($_ENV as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                } else {
                    echo("<p>Contenido de <strong>".'$_ENV'."</strong> esta vacia.");
                }
                echo("</p>");
                echo "</div>";
                
                // Muestra en pantalla la información de PHP de nuestro servidor
                phpinfo();
            ?>
        </main>
        <footer>
            <p>2023-2024 © Todos los derechos reservados. <a href="../indexProyectoTema5.php">Erika Martínez Pérez</a></p>
        </footer>
    </body>
</html>