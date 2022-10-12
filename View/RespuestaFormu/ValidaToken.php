<?php 
include '../Header/HeaderPopUp.php';
include_once '../../Model/Conexion.php';
include '../../Controller/funciones/funcs.php';

if(isset($_GET['id']) AND isset($_GET['val'])){
    $idUser= $_GET['id'];
    $token = $_GET['val'];
    $mensaje = checkToken($idUser,$token);
    
    //Información para enviar al Asesor 
    $fistName = $_GET['name'];
    $lastName = $_GET['last'];
    $tpDocument = $_GET['tpDoc'];
    $numDocument = $_GET['numDoc'];
    $email = $_GET['mail'];
    $phone = $_GET['phone'];


    $asunto = 'Activación de cuenta de usuario';
    $cuerpo = "El correo $email ha realizado el proceso de activación.<br>
    El nombre de la persona es: $fistName.<br>
    El apellido: $lastName.<br>
    El tipo de documento es: $tpDocument.<br>
    El número de documento: $numDocument.<br>
    El número de teléfono es: $phone.<br>
    ";

    $empresaEmail = 'diana.requejo@kemba.com.co';
    $firstname = 'Asesora Diana Requejo';

    SendSimulation($empresaEmail, $firstname, $asunto, $cuerpo);
}?>

<div class="body_Modal">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
           
                <div class="modal-body" style="text-align: center; align-items: center;">

                    <svg style="color: rgba(228, 63, 90, 0.75);" xmlns="http://www.w3.org/2000/svg" width="120" height="115" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                    <br>
                    <br>
                    <p><?php echo $mensaje;?></p>
                    <a href="../MiCrediKemba.php" style=" border: none; background-color: rgba(228, 63, 90, 0.75); color: white ;" type="button" class="btn btn">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</div>