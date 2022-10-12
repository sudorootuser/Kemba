
<?php
/************************\
 **
 *Creador: Juan Sebastián Hernandez
 *Desarollador
 **
\***********************/


// DB Credenciales de Usuario

// Conexión Servidor


define('DB_HOST', 'localhost'); //Se declara el hosting o el servidor local
define('DB_PASS', '');          //La contraseña de la base de datos local
define('DB_USER', 'root');      //Se coloca el usario correspondiente

// define('DB_HOST', 'kemba.com.co'); //Se declara el hosting o el servidor
// define('DB_USER', 'kembaAdmin');      //Se coloca el usario correspondiente
// define('DB_PASS', 'bogota2020');          //La contraseña de la base de datos

define('DB_NAME', 'kemba');     //El nombre de la base de datos

// Conexión local
// define('DB_HOST', 'localhost'); //Se declara el hosting o el servidor
// define('DB_USER', 'root');      //Se coloca el usario correspondiente
// define('DB_PASS', '');          //La contraseña de la base de datos
// define('DB_NAME', 'kemba');     //El nombre de la base de datos

// Ahora, establecemos la conexión
try {
    // Se ejecuta las variables y aplicamos UTF8

    $connect = new PDO(
        "mysql:host]=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,

        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

