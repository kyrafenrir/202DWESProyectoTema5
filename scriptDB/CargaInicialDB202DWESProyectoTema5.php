<?php
try {
    // Configuración de conexión con la base de datos
    define('dsn', 'mysql:host=db5014806730.hosting-data.io;dbname=dbs12302406'); // Host y nombre de la base de datos
    define('usuario','dbu1907033'); // Nombre de usuario de la base de datos
    define('password','daw2_Sauces'); // Contraseña de la base de datos
    // Crear conexión
    $conn = new PDO(DSN, USERNAME, PASSWORD);

    // Creamos una variable con varias consultas a realizar
    $consulta = <<<CONSULTA
            INSERT INTO dbs12302406.T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
                ('AAA', 'Departamento de Ventas', NOW(), 100000.50, NULL),
                ('AAB', 'Departamento de Marketing', NOW(), 50089.50, NULL),
                ('AAC', 'Departamento de Finanzas', NOW(), 600.50, NULL);
            INSERT INTO dbs12302406.T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
                ('admin', SHA2(CONCAT('admin','paso'), 'administrador', 'administrador'),
                ('alvaro', SHA2(CONCAT('alvaro','paso'), 'Álvaro Cordero Miñambres', 'usuario'),
                ('carlos', SHA2(CONCAT('carlos','paso'), 'Carlos García Cachón', 'usuario'),
                ('oscar', SHA2(CONCAT('oscar','paso'), 'Oscar Pascual Ferrero', 'usuario'),
                ('borja', SHA2(CONCAT('borja','paso'), 'Borja Nuñez Refoyo', 'usuario'),
                ('rebeca', SHA2(CONCAT('rebeca','paso'), 'Rebeca Sánchez Pérez', 'usuario'),
                ('erika', SHA2(CONCAT('erika','paso'), 'Erika Martínez Pérez', 'usuario'),
                ('ismael', SHA2(CONCAT('ismael','paso'), 'Ismael Ferreras García', 'usuario'),
                ('heraclio', SHA2(CONCAT('heraclio','paso'), 'Heraclio Borbujo Moran', 'administrador'),
                ('amor', SHA2(CONCAT('amor','paso'), 'Amor Rodriguez Navarro', 'administrador'),
                ('alberto', SHA2(CONCAT('alberto','paso'), 'Alberto Bahillo Fernandez', 'administrador'),
                ('antonio', SHA2(CONCAT('antonio','paso'), 'Antonio Jañez Velada', 'administrador');
            CONSULTA;
    $consultaPreparada = $conn->prepare($consulta);
    $consultaPreparada->execute();

    echo "<span style='color:green;'>Valores insertados correctamente</span>"; // Mostramos el mensaje si la consulta se a ejecutado correctamente
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