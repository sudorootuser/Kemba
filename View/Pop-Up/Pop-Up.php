<!-- POP-UP TRACTADO DE INFORMACIÓN -->
<div class="pop-up">
    <div class="pop-up-wrap">
        <div class="pop-up-title">
            <h2>KEMBA</h2>
            <p>Cumpliendo Sueños</p>
        </div>
        <div class="subcription">
            <div class="line"></div>
            <i class="far fa-times-circle" id="close"></i>
            <div class="sub-content">
                <h3>TRATAMIENTO DE DATOS </h3>
                <p>Autoriza el tratamiento de su información?</p>
                <form>
                    <input type="button" class="btn-abrir subs-send"
                        value="Acepto el tratamiento de mis datos"></button>
                </form>
            </div>

            <div class="line"></div>
        </div>
    </div>
</div>
<!-- POP-UP FORMULARIO -->
<div class="pop-up-form">
    <div class="pop-up-wrap-form">
        <div class="pop-up-title-form">
            <h2>KEMBA</h2>
            <p>¡Que esperas!, Se uno de los muchos miembros del equipo Kemba</p>
        </div>
        <div class="subcription-form">
            <div class="line-form"></div>
            <i class="far fa-times-circle" id="close-form"></i>
            <div class="sub-content-form">
                <h2>SUSCRIBETE</h2>
                <p>Unete, para no perderte nuestras promociones y novedades</p>
                <div style="overflow-y: scroll; height: 250px;">

                    <!-- Fin de alerta -->
                    <!-- Formulario de Registro -->
                    <form action="../Controller/RegisterUser/Create.php" method="POST" autocomplete="off">
                        <input type="text" name="nombre" class="subs-email-form"
                            placeholder="Escribe tu nombre completo" required>
                        <input type="text" name="apellido" class="subs-email-form"
                            placeholder="Escribe tu apellido completo" required>
                        <select class="subs-select-form" name="tpDocumento">
                            <option>Tipo de documento</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                            <option value="Cédula de extrangería">Cédula de extrangería</option>
                        </select>
                        <input type="number" name="numeroDocumento" class="subs-email-form"
                            placeholder="Escribe tu número de cédula" required>

                        <input type="email" name="correo" class="subs-email-form"
                            placeholder="Escribe tu correo electronico" required>
                        <input type="number" name="telefono" min="10" class="subs-email-form"
                            placeholder="Escribe tu teléfono de contacto" required>
                        <button name="insertar" class="subs-send-form" type="submit">Enviar Suscripcion</button>
                    </form>
                    <!-- Fin del Formulario -->
                </div>
                <a href="https://www.facebook.com/Kemba2022"><img src="../Resource/img/icons8-facebook.svg" alt=""></a>
                <a href="#"><img src="../Resource/img/icons8-play-button.svg" alt=""></a>
                <!-- <a href="#"><img src="../Resource/img/icons8-facebook.svg" alt=""></a>
                    <a href="#"><img src="../Resource/img/icons8-instagram.svg" alt=""></a> -->
            </div>
            <div class="line-form"></div>
        </div>
    </div>
</div>