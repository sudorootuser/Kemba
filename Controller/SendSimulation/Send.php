<?php
include_once '../../Model/Conexion.php';
include_once '../funciones/funcs.php';

if (!isset($_GET['simulacion'])) {

    ////////  INFORMACIÓN ENVIADA POR EL FORMULARIO  //////////
    $meses = $_POST['meses'];
    $monto = $_POST['monto'];
    $tpEmpresa = $_POST['tpEmpresa'];
    $phone = $_POST['telefono'];
    $email = $_POST['correo'];
    $phone = $_POST['telefono'];

    // Contraseña por defecto 
    $codigo = $_POST['codigo'];

    $asunto = 'Registro de solicitud de prestamo';
    $cuerpo = "El correo $email ha solicitado un credito de un valor de <span style='color:blue;'>$monto </span> con una cantidad de <span style='color:blue;'> $meses</span> meses a diferir, <br>
              con el tipo <span style='color:blue;'> $tpEmpresa </span> como multinivel, y el código del referenciador es  <span style='color:blue;'>$codigo </span>";

    // $empresaEmail = 'diana.requejo@kemba.com.co';
    $empresaEmail = 'rrejuancho1999@gmail.com';
    $firstname = 'Asesora Diana Requejo';


    if (SendSimulation($empresaEmail, $firstname, $asunto, $cuerpo)) {

        header("Location: ../../View/RespuestaFormu/EnvioSimulador.php");
    } else {
        header("Location: ../../View/RespuestaFormu/RegistroIncorrecto.php");
    }
} else { ?>
    <script>
        alert('Error!, contacte con el administrador del sistema!');
    </script>
<?php }
