Script de creación de la tabla:
<?php
try {
    // Configuración de conexión con la base de datos
    require_once '../config/configDB.php';

    // Crear conexión
    $conn = new PDO(dsn, usuario, password);

    // Creamos una variable con varias consultas a realizar
    $consulta = <<<CONSULTA
            CREATE TABLE IF NOT EXISTS dbs12302406.T01_Usuario (
                T01_CodUsuario CHAR(8) PRIMARY KEY,
                T01_Password VARCHAR(64),
                T01_DescUsuario VARCHAR(255),
                T01_NumConexiones INT DEFAULT 0,
                T01_FechaHoraUltimaConexion DATETIME DEFAULT CURRENT_TIMESTAMP,
                T01_Perfil ENUM('usuario','administrador') DEFAULT 'usuario',
                T01_ImagenUsuario BLOB
            )ENGINE=INNODB;
            CREATE TABLE IF NOT EXISTS dbs12302406.T02_Departamento (
                T02_CodDepartamento CHAR(3) PRIMARY KEY,
                T02_DescDepartamento VARCHAR(255),
                T02_FechaCreacionDepartamento DATETIME DEFAULT CURRENT_TIMESTAMP,
                T02_VolumenDeNegocio FLOAT,
                T02_FechaBajaDepartamento DATETIME
            )ENGINE=INNODB;
            CONSULTA;
    $consultaPreparada = $conn->prepare($consulta);
    $consultaPreparada->execute();

    echo "<span style='color:green;'>Tablas creadas correctamente</span>"; // Mostramos el mensaje si la consulta se a ejecutado correctamente
} catch (PDOException $miExcepcionPDO) {
    $errorExcepcion = $miExcepcionPDO->getCode(); // Almacenamos el código del error de la excepción en la variable '$errorExcepcion'
    $mensajeExcepcion = $miExcepcionPDO->getMessage(); // Almacenamos el mensaje de la excepción en la variable '$mensajeExcepcion'

    echo "<span style='color:red;'>Error: </span>" . $mensajeExcepcion . "<br>"; // Mostramos el mensaje de la excepción
    echo "<span style='color:red;'>Código del error: </span>" . $errorExcepcion; // Mostramos el código de la excepción
    die($miExcepcionPDO);
} finally {
    // Cerrar la conexión
    if (isset($conn)) {
        $conn = null;
    }
}