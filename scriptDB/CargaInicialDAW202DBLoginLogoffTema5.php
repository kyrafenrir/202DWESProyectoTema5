<?php
// Configuración de conexión con la base de datos
require_once '../config/configDB.php';

try {
    // Crear conexión
    $conn = new PDO(dsn, usuario, password);

    // Utilizar la base de datos 
    $query1 = "USE dbs12302406;";

    // Inserto los datos iniciales en la tabla T02_Departamento
    $query2 = "INSERT INTO T02_Departamento (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio, T02_FechaBajaDepartamento) VALUES
    ('AAA', 'Departamento de Ventas', NOW(), 100000.50, NULL),
    ('AAB', 'Departamento de Marketing', NOW(), 50089.50, NULL),
    ('AAC', 'Departamento de Finanzas', NOW(), 600.50, '2023-11-13 13:06:00')";
    
    // Inserto los datos iniciales en la tabla T01_Usuario con contraseñas cifradas en SHA-256
    $query3 = "INSERT INTO T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES
    ('admin', SHA2('adminpaso', 256), 'administrador', 'administrador'),
    ('alvaro', SHA2('alvaropaso', 256), 'Álvaro Cordero Miñambres', 'usuario'),
    ('carlos', SHA2('carlospaso', 256), 'Carlos García Cachón', 'usuario'),
    ('oscar', SHA2('oscarpaso', 256), 'Oscar Pascual Ferrero', 'usuario'),
    ('borja', SHA2('borjapaso', 256), 'Borja Nuñez Refoyo', 'usuario'),
    ('rebeca', SHA2('rebecapaso', 256), 'Rebeca Sánchez Pérez', 'usuario'),
    ('erika', SHA2('erikapaso', 256), 'Erika Martínez Pérez', 'usuario'),
    ('ismael', SHA2('ismaelpaso', 256), 'Ismael Ferreras García', 'usuario'),
    ('heraclio', SHA2('heracliopaso', 256), 'Heraclio Borbujo Moran', 'administrador'),
    ('amor', SHA2('amorpaso', 256), 'Amor Rodriguez Navarro', 'administrador')";

    // Insertar datos tabla alumno
    $query4 = "INSERT INTO T09_Alumno (T09_CodAlumno,T09_NombreAlumno, T09_ApellidosAlumno, T09_FechaNacimiento, T09_Grupo, T09_ImporteMatricula, T09_FechaBaja) VALUES 
    ('A01','Rebeca','Sanchez','1992-08-15 07:21:53','DAW',12.12,null),
    ('A02','Erika','Martínez','1987-05-03 15:44:29','DAW',22.12,null),
    ('A03','Alvaro','Cordero','1998-11-20 23:12:18','DAW',12.12,null),
    ('A04','Borja','Nuñez','1986-02-18 04:36:07','DAW',22.12,null),
    ('A05','Ismael','Ferreras','2001-04-28 11:55:42','DAW',12.12,null),
    ('A06','Oscar','Pascual','1985-09-10 18:27:33','DAW',22.12,null),
    ('A07','Carlos','Garcia','1984-10-01 09:08:15','DAW',12.12,null);";

    // Ejecutar consultas SQL
    $sql_queries = [$query1, $query2, $query3, $query4];

    foreach ($sql_queries as $query) {
        if ($conn->query($query) === FALSE) {
            throw new Exception("Error al ejecutar la consulta: $query - " . $conn->error);
        }
        echo "Consulta ejecutada con éxito: $query<br>";
    }
} catch (PDOException $miExcepcionPDO) {
    $errorExcepcion = $miExcepcionPDO->getCode(); // Almacenamos el código del error de la excepción en la variable '$errorExcepcion'
    $mensajeExcepcion = $miExcepcionPDO->getMessage(); // Almacenamos el mensaje de la excepción en la variable '$mensajeExcepcion'

    echo "<span class='errorException'>Error: </span>" . $mensajeExcepcion . "<br>"; // Mostramos el mensaje de la excepción
    echo "<span class='errorException'>Código del error: </span>" . $errorExcepcion; // Mostramos el código de la excepción
    die($miExcepcionPDO);
} finally {
    // Cerrar la conexión
    if (isset($conn)) {
        $conn = null;
    }
}


