<html>
<!-- Headers -->
<?php include_once './Header/HeaderContent.php'; ?>

<body onselectstart='return true;'>
    <?php include_once './MenuNav.php';  ?>
    <div class="container-fluid contenedor">
        <div class="row">
            <div class="col-sm text-center">
                <p style="color: #4f47bf;font-family: Red Hat Display, Sans-serif;font-size: 45px;font-weight: 900;">
                    Contáctenos
                </p>
                <hr style="border: solid 1px #4F47BF;width: 90%; margin-left: 5%;">
            </div>
            <br>
            <div class="row cont-form" style="margin: 0 50px 0 70px;">
                <div class="col-sm">
                    <p style="color: #4f47bf; font-size: 35px; font-weight: 900;">
                        En Kemba estamos listos para atenderte <br>
                    </p>
                    <span style="font-weight: 600;">Con el fin de estar más cerca de ti, dejanos tus datos y nuestro equipo se pondra en contacto contigo, completa los campos y se parte del equipo kemba!!</span>
                    <form>
                        <div class="row cont-txt">
                            <div class="col-sm-12 mb-3">
                                <input type="text" class="form-control cnt-fmc" id="nomApell" placeholder="Nombres y apellidos" required>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <input type="email" class="form-control cnt-fmc" id="email" placeholder="Correo" required>
                            </div>
                            <br>
                            <div class="col-sm-6 mb-3">
                                <input type="number" ondrop="return false;" onpaste="return false;" onkeypress="return" class="form-control cnt-fmc" id="exampleInputPassword1" placeholder="Número de telefono" maxlength="10" minlength="10" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control cnt-fmc" id="exampleInputPassword1" placeholder="Nombre de la empresa">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control cnt-fmc" id="exampleInputPassword1" placeholder="País" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control cnt-fmc" id="exampleInputPassword1" placeholder="Ciudad" required>
                            </div>
                            <div class="form-floating col-sm-12 mb-3">
                                <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label class="ctd-txt-lb" for="floatingTextarea2">Mensaje</label>
                            </div>
                            <p>
                                Kemba tiene el compromiso de proteger y respetar tu privacidad y solo usaremos tu información personal para administrar tu cuenta y proporcionar los productos y servicios que nos solicites. De vez en cuando, nos gustaría ponernos en contacto contigo acerca de nuestros productos y servicios, así como sobre otros contenidos que puedan interesarte. Si aceptas que nos comuniquemos contigo con este propósito, marca la casilla que está a continuación para indicar cómo deseas que nos comuniquemos contigo:
                            </p>
                            <div class="mb-3 form-check">
                                <input class="form-check-input ctd" type="checkbox" value="Sí" id="flexCheckDefault">
                                <label class="form-check-label ctd-txt" for="check">
                                    Acepto recibir otras comunicaciones de Kemba.
                                </label>
                            </div>
                            <p>
                                Puedes cancelar la recepción de estas comunicaciones en cualquier momento. Para obtener más información sobre cómo cancelar la recepción de comunicaciones, nuestras prácticas de privacidad y cómo nos comprometemos a proteger y respetar tu privacidad, revisa nuestra Política de privacidad.

                                Al hacer clic en Enviar a continuación, aceptas que Kemba almacene y procese la información personal enviada anteriormente para proporcionarte el contenido solicitado.

                            </p>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-lg" style="background-color: #EC268F;color: white; width: 100%;">Enviar ahora</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>

        <!-- Se incluye el Footer (Pie de página) -->
        <?php include_once './Header/Footer.php'; ?>

</body>

</html>