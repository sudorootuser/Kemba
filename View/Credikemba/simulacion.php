<html>
<!-- Headers -->
<?php
include_once '../Header/HeaderCrediKemba.php';
include_once '../../Model/Conexion.php';

if (isset($_GET['sum_monto'])) {
    $meses = $_GET['meses'];
    $monto = $_GET['monto'];
    $tpEmpresa = $_GET['tpEmpresa'];

    // Tasa de interes
    $tasa = 0.024;


    // Valor del Seguro
    $seguro = 1800;

    // Tasa de interes
    $interes = $monto * $tasa;

    // Abono a capital

    $abonoCapital = $monto / $meses;

    // Valor cuota sin seguro
    $valorCuotaSinSeguro = $abonoCapital + $interes;

    // Valor cuota con seguro

    $valorCuotaConSeguro = $valorCuotaSinSeguro + $seguro;

    // Saldo final

    $saldoFinal = $monto - $abonoCapital;
} ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<body style="background-color: #fff;overflow-y: auto !important;overflow-x: hidden !important;width: 100% !important;margin: 0px !important;">
    <div class="row">
        <div class="col">
            <?php include_once './MenuNav.php'; ?>
        </div>
    </div>

    <div class="container">
        <!-- Titulo -->
        <div class="row">
            <div class="col-sm-8 text-right">
                <p style="font-size: 3em;color: #4F47BF;margin-top: 25px;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                    SIMULADOR
                </p>
            </div>
            <div class="col-sm text-right">
                <a href="./../index.php" class="btn" style="background-color: #4F47BF;  width: 170px; height: 40px; color: white; margin-top: 35px;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold">
                    Cancelar Simulación
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="text-align: center;">Calcula el valor de la cuota o el monto que puedes solicitar de acuerdo
                    con las necesidades de crédito y capacidad de pago</p>
            </div>
        </div>
        <!-- End titulo y texto -->
        <br>
        <br>
        <!-- Caracteristicas -->
        <div class="row">
            <div class="col-sm">
                <br>
                <!-- Ventana de Monto -->
                <br>
                <!-- Ventana de Cantidad de Meses -->
                <div class="card" style="display: show;" id="SDFGDS">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm text-center">
                                <p style="font-size: 2.2em;color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                                    TASA FIJA - CUOTA VARIABLE
                                </p>
                            </div>
                        </div>
                        <!-- Monto -->
                        <div class="row" style="margin-top: 70px;">
                            <cdiv class="col-sm"></cdiv>
                            <div class="col-sm-8 text-center">
                                <div class="mb-3">
                                    <label for="" class="form-label">Por un credito de: </label>
                                    <input style="font-weight: 600; font-size: 25px; color: #4F47BF;" disabled class="form-control form-select-lg mb-3 text-center" name="tpEmpresa" value="<?php echo $monto; ?>">
                                </div>
                            </div>
                            <cdiv class="col-sm"></cdiv>
                        </div>
                        <div class="row" style="margin-top: 70px;">
                            <cdiv class="col-sm"></cdiv>
                            <div class="col-sm-8 text-center">
                                <div class="mb-3">
                                    <label for="" class="form-label">Pagarias a <?php echo $meses ?> cuotas mensuales por
                                        un valor aproximado de: </label>
                                    <input style="font-weight: 600; font-size: 25px; color: #4F47BF;" disabled class="form-control form-select-lg mb-3 text-center" name="tpEmpresa" value="<?php echo  $valorCuotaConSeguro; ?>">
                                </div>
                            </div>
                            <cdiv class="col-sm"></cdiv>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-sm-10">
                                <label style="text-align: left ; padding: 5px;" class="form-check-label" for="flexCheckDefault">
                                    Tasas y tarifas
                                </label>
                                <br><br>
                                <p>
                                    Tasa mes vencido 2.4%
                                    <br>
                                    Seguro de vida $1.800.00
                                </p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="padding: 15px; color: white;background-color: #4F47BF;  width: 100%; height: 60px; margin-bottom: 35px;">
                                    SOLICITAR CREDITO </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" style="color:#4F47BF;" id="staticBackdropLabel">
                                                    DATOS DEL SOLICITANTE</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../../Controller/SendSimulation/Send.php" method="POST">
                                                    <input type="hidden" name="meses" value="<?php echo $meses; ?>">
                                                    <input type="hidden" name="monto" value="<?php echo $monto; ?>">
                                                    <input type="hidden" name="tpEmpresa" value="<?php echo $tpEmpresa; ?>">
                                                    <input type="hidden" name="valorCuotaConSeguro" value="<?php echo $valorCuotaConSeguro; ?>">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Correo
                                                            electrónico</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" name="correo">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                                                        <input type="phone" class="form-control" name="telefono" id="exampleInputPassword1">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Código del
                                                            referenciador <span style="color: #4F47BF;">(Solo si le
                                                                suministraron el código)</span></label>
                                                        <input type="number" class="form-control" name="codigo" id="exampleInputPassword1">
                                                    </div>
                                                    <button type="submit" name="simulacion" class="btn btn" style="background-color: #4F47BF; color: #fff;">Enviar
                                                        Solicitud</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <?php include_once '../Header/Footer.php'; ?>
</body>
<script>
    function ValidarMonto() {
        var valor = $('#monto').val();
        alert('Casi');
        $('#MontoCal').show();
        $('#MontoMes').hide();
    }

    // Ocultar Elementos 
    let pr = document.getElementById('MontoNo')
    pr.onclick = showNo;

    function showNo(evento) {
        $('#MontoCal').hide();
        $('#MontoMes').hide();
    }

    // Radio Button Sí
    let si = document.getElementById('MontoSi')
    si.onclick = showSi;

    function showSi(evento) {
        $('#MontoCal').show();
    }

    function sendForm(e) {
        e.preventDefault();
    }
</script>

</html>