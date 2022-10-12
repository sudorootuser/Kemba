<html>
<!-- Headers -->
<?php
include_once '../Header/HeaderCrediKemba.php';
include_once '../../Model/Conexion.php'; ?>

<body>
    <?php include_once './MenuNav.php'; ?>

    <div class="container">
        <!-- Titulo -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm text-center">
                <p style="font-size: 3em;color: #4F47BF;margin-top: 25px;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                    SIMULADOR
                </p>
            </div>
            <div class="col-sm-1">
                <a href="./../index.php" class="btn" style="background-color: #4F47BF;  width: 170px; height: 40px; color: white; margin-top: 35px;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold">
                    Cancelar Simulación
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="text-align: center;">Calcula el valor de la cuota o el monto que puedes solicitar de acuerdo con las necesidades de crédito y capacidad de pago</p>
            </div>
        </div>
        <!-- End titulo -->
        <br>
        <br>
        <!-- Caracteristicas -->
        <div class="row">
            <div class="col-sm text-center">
                <p style="font-size: 2.2em;color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                    CARACTERISTICAS
                </p>
            </div>
        </div>
        <div class="row">
            <col class="col-sm-2">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <!-- Edad -->
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <div class="col-sm text-left">
                                <h2 style="font-family: 'BarlowSemiCondensed-SemiBold';">Edad entre <b>18 y 34</b> </h2>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                </svg>
                            </div>
                            <div class="col-sm text-left">
                                <h2 style="font-family: 'BarlowSemiCondensed-SemiBold';">Monto minimo de <b>$600.000</b> <br> Monto maximo <b>$3'000.000.00 </b> </h2>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            </div>
                            <div class="col-sm text-left">
                                <h2 style="font-family: 'BarlowSemiCondensed-SemiBold';">Plazo minimo <b>1 </b> plazo maximo <b>12 Meses</b> </h2>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                </svg>
                            </div>
                            <div class="col-sm text-left">
                                <h2 style="font-family: 'BarlowSemiCondensed-SemiBold';">Puedes hacer pagos <b>extraordinarios y cancelación</b> sin sanción</h2>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <br>
                        <form action="CantidadMonto.php" method="POST">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input style="height: 30px; width: 40px; " class="form-check-input" type="checkbox" value="1" onclick="btTutorial.disabled = !this.checked">
                                        <label style="margin-left: 80px; padding: 5px;" class="form-check-label" for="flexCheckDefault">
                                            Aceptar Terminos y Condiciones de Kemba
                                        </label>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-9">
                                    <button name="btTutorial" class="btn" style="padding: 15px; color: white;background-color: #4F47BF;  width: 100%; height: 60px;" disabled>
                                        CONTINUAR
                                    </button>
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <col class="col-sm-2">
        </div>
        <br>
        <br>
    </div>
    <!-- Se incluye el Footer (Pie de página) -->
    <?php include_once '../Header/Footer.php'; ?>


</body>

</html>