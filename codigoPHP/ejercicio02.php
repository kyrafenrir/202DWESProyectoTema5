    <?php
        /**
         * @author Ismael Ferreras García
         * adaptado por @author Erika Martínez Pérez
         * @version 1.0
         * @since 21/11/2023
         */
    
        require_once '../config/configDB.php';

        try {
            // Conexión con la base de datos
            $miDB = new PDO(dsn,usuario,password);

            if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
                header('WWW-Authenticate: Basic realm="Acceso restringido"');
                header('HTTP/1.0 401 Unauthorized');
                exit();
            }

            $usuario = $_SERVER['PHP_AUTH_USER'];
            $contrasena = $_SERVER['PHP_AUTH_PW'];
            $hashContrasena = hash('sha256', $usuario . $contrasena);

            $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = ? AND T01_Password = ?";
            $stmt = $miDB->prepare($sql);
            $stmt->execute([$usuario, $hashContrasena]);

            $resultado = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
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
            <h1>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO):</h1>
        </header>
        <main>
            <?php
                if ($resultado) {
                    $descripcion_usuario = $resultado->T01_DescUsuario;
                    echo "<p>Bienvenid@, $descripcion_usuario!</p>";
                } else {
                    header('HTTP/1.1 401 Unauthorized');
                    echo '<p>Credenciales incorrectas. Acceso denegado.</p>';
                    echo("<a href='https://daw202.ieslossauces.es/202DWESProyectoTema5/indexProyectoTema5.php'>Volver al menú</a>");
                }
            ?>
        </main>
        <footer>
            <p>2023-2024 © Todos los derechos reservados. <a href="../indexProyectoTema5.php">Erika Martínez Pérez</a></p>
        </footer>
    </body>
</html>
