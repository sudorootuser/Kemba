<?php
include_once '../../Model/Conexion.php';
include '../funciones/funcs.php';

if (isset($_POST['insertar'])) {

    ////////  INFORMACIÓN ENVIADA POR EL FORMULARIO  //////////

    $firstname = $_POST['nombre'];
    $lasname = $_POST['apellido'];
    $tipoDocument = $_POST['tpDocumento'];
    $numeroDocumento = $_POST['numeroDocumento'];
    $email = $_POST['correo'];
    $phone = $_POST['telefono'];
    // Contraseña por defecto 
    $password = 'Kemba12345';

    // Se llama la función para generar el Token aleatorio
    $token = GenerateToken();


    //////// FIN DE INFORMACIÓN ENVIADA POR EL FORMULARIO  //////////

    ///// Se valida que el usuario no se encuentre registrado en el sistema /////

    if (constUser($numeroDocumento,$email)) {
        header("Location: ../../View/RespuestaFormu/UsuarioExistente.php?name=$firstname + $lasname");
    } else {

        ///// Fin de validación //////

        // Se llama una función para encriptar la contraseña
        $pass_hash = hashPassword($password);

        ////////  INSERTAR EN LA TABLA LA INFORMACIÓN ENVIADA POR EL FORMULARIO  //////////

        $registrer = CreateUser($firstname, $lasname, $tipoDocument, $numeroDocumento, $email, $phone, $pass_hash,$token);

        if ($registrer > 0) {

            // Código del Contenido que se enviara al correo eletronico del Usuario
            include_once 'cuerpo_mensaje.php';

            if (SendEmail($email, $firstname, $asunto, $cuerpo)) {

                header("Location: ../../View/RespuestaFormu/RegistroCorrecto.php?name=$firstname + $lasname");
                exit;
            } else {

                header("Location: ../../View/RespuestaFormu/UsuarioExistente.php?name=$firstname + $lasname");
            }
        } else {
            header("Location: ../../View/RespuestaFormu/RegistroIncorrecto.php");
        }
    }
}
