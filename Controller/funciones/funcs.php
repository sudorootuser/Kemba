<?php
// Función para encriptar

function hashPassword($password)
{
    $hash = password_hash($password, PASSWORD_DEFAULT, array("cost" => 15));
    return $hash;
}
// Generar un Token para validar al usuario en el sistema

function GenerateToken()
{
    $gen = md5(uniqid(mt_rand(), true));
    return $gen;
}

// Proceso para validar la información del Usuario

function checkToken($id, $token)
{
    global $connect;

    $query = $connect->prepare("SELECT activacion FROM usuarios WHERE idUsuarios = :id AND token = :token LIMIT 1");
    $query->bindParam(":id", $id, PDO::PARAM_STR, 45);
    $query->bindParam(":token", $token, PDO::PARAM_STR, 60);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        return false;
    } else {
        $result['activacion'];

        if ($result['activacion'] == '1') {

            $msg = "Su cuenta ya se activo anteriormentre, puede proceder a iniciar en el sistema con sus credenciales suministradas";

            return $msg;
        } else {

            if (activationUser($id)) {
                $msg = "Su cuenta se ha activado de manera exitosa, puede proceder a iniciar en el sistema  con sus credenciales suministradas";
            } else {
                $msg = "Cuenta no activada, por favor comuniquese con el administrador del sistema";
            }
        }
        return $msg;
    }
}

// Función para reqalizar la activación del usuario

function activationUser($id)
{

    global $connect;

    $query = $connect->prepare("UPDATE usuarios SET activacion=1 WHERE idUsuarios = :id");
    $query->bindParam(':id', $id, PDO::PARAM_STR);

    $result = $query->execute();

    return $result;
}

// Función para Consultar el Usuario

function constUser($numeroDocumento, $email)
{
    session_start();

    global $connect;

    $sql_m = $connect->prepare("SELECT * FROM usuarios WHERE email = :mail");
    $sql_m->bindParam(":mail", $email, PDO::PARAM_STR);

    $sql_m->execute();

    $result_m = $sql_m->fetch(PDO::FETCH_ASSOC);

    if ($result_m) {
        return true;
    } else {
        $query = $connect->prepare("SELECT * FROM usuarios WHERE numero_documento = :tpDoc");
        $query->bindParam(":tpDoc", $numeroDocumento, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return false;
        } else {
            // $_SESSION['idUsuarios'] = $result['idUsuarios'];
            // $_SESSION['nombre'] = $result['nombre'];
            return true;
        }
    }
}

// Registrar Usuario

function CreateUser($firstname, $lasname, $tipoDocument, $numeroDocumento, $email, $phone, $pass_hash, $token)
{

    global $connect;

    $sql = "INSERT INTO usuarios (nombre,apellido,tipo_doc,numero_documento,email,telefono,clave,token) VALUES (:name, :last,:tpDoc,:numDoc,:email,:phone,:pass,:tok)";

    $sql = $connect->prepare($sql);

    $sql->bindParam(':name', $firstname, PDO::PARAM_STR, 45);
    $sql->bindParam(':last', $lasname, PDO::PARAM_STR, 45);
    $sql->bindParam(':tpDoc', $tipoDocument, PDO::PARAM_STR, 45);
    $sql->bindParam(':numDoc', $numeroDocumento, PDO::PARAM_STR, 45);
    $sql->bindParam(':email', $email, PDO::PARAM_STR, 45);
    $sql->bindParam(':phone', $phone, PDO::PARAM_INT, 45);
    $sql->bindParam(':pass', $pass_hash, PDO::PARAM_STR, 45);
    $sql->bindParam(':tok', $token, PDO::PARAM_STR, 45);

    if ($sql->execute()) {

        $lasInsertId = $connect->lastInsertId();

        return $lasInsertId;
    } else {
        return 0;
    }
}

// Función para enviar el correo electonico
function SendEmail($email, $firstname, $asunto, $cuerpo)
{


 require_once './PHPMailer/PHPMailerAutoload.php';
    //Server settings
    $mail = new PHPMailer();
    $mail->isSMTP();                         //Send using SMTP
    $mail->SMTPAuth = true;                  //Enable SMTP authentication
    $mail->Username = 'clientes@kemba.com.co'; //correo desde donde se enviaran lo correos
    $mail->Password = 'Kemba2021*'; //password de correo emisor
    $mail->SMTPSecure = 'ssl';               //Enable implicit TLS encryption
    $mail->Host = 'sxb1plzcpnl459832.prod.sxb1.secureserver.net';          //Set the SMTP server to send through
    $mail->Port = '465';                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

 
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Recipients
    $mail->setFrom('clientes@kemba.com.co', 'KEMBA'); //datos del emisor
    // $mail->addReplyTo('correo@dominio.tld', 'Magic');                //Set an alternative reply-to address
    $mail->addAddress($email, $firstname);
    //$mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments files and img
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content

    $mail->IsHTML(true);                         //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send())
    
        return true;
    else
        return false;
}


// Enviar los datos de la simulación
function SendSimulation($empresaEmail, $firstname, $asunto, $cuerpo)
{
    require_once '../RegisterUser/PHPMailer/PHPMailerAutoload.php';

    //Server settings
    $mail = new PHPMailer();
    $mail->isSMTP();                         //Send using SMTP
    $mail->SMTPAuth = true;                  //Enable SMTP authentication
    $mail->Username = 'clientes@kemba.com.co'; //correo desde donde se enviaran lo correos
    $mail->Password = 'Kemba2021*'; //password de correo emisor
    $mail->SMTPSecure = 'ssl';               //Enable implicit TLS encryption
    $mail->Host = 'sxb1plzcpnl459832.prod.sxb1.secureserver.net';          //Set the SMTP server to send through
    $mail->Port = '465';                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';


    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Recipients
    $mail->setFrom('clientes@kemba.com.co', 'KEMBA'); //datos del emisor
    // $mail->addReplyTo('correo@dominio.tld', 'Magic');                //Set an alternative reply-to address
    
    $mail->addAddress($empresaEmail, $firstname);
    $mail->addAddress('rrejuancho1998@gmail.com');               //Name is optional
    // $mail->addAddress('drequejo94@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments files and img
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content

    $mail->IsHTML(true);                         //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send())
        return true;
    else
        return false;
}
