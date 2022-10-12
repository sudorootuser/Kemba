<html>
<!-- Headers -->
<?php
include_once '../Header/HeaderCrediKemba.php';
include_once '../../Model/Conexion.php';

if (isset($_POST['val_monto'])) {

    $monto = $_POST['monto'];
} ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<body style="background-color: #fff;overflow-y: auto !important;overflow-x: hidden !important;width: 100% !important;margin: 0px !important;">
    <div class="row">
        <div class="col">
            <?php include_once './MenuNav.php';  ?>
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
                <p style="text-align: center;">Calcula el valor de la cuota o el monto que puedes solicitar de acuerdo con las necesidades de crédito y capacidad de pago</p>
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
                                    MESES A DIFERIR
                                </p>
                            </div>
                        </div>
                        <form action="Multinivel.php" method="POST">
                        <input type="hidden" name="monto" value="<?php echo $monto;?>">
                            <!-- Monto -->
                            <div class="row" style="margin-top: 70px;">
                                <cdiv class="col-sm"></cdiv>
                                <div class="col-sm-8 text-center">
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <input type="number" class="form-control" name="meses" id="meses" aria-describedby="helpId" placeholder="Ingrese los meses..."  min="1" max="12" required>
                                    </div>
                                </div>
                                <cdiv class="col-sm"></cdiv>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-10">
                                    <label style="text-align: left ; padding: 5px;" class="form-check-label" for="flexCheckDefault">
                                        El plazo maximo es de 12 meses
                                    </label>
                                    <br>
                                    <label style="text-align: left ; padding: 5px;" class="form-check-label" for="flexCheckDefault">
                                        El plazo minimo es de 1 mes
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <button class="btn" name="val_monto" style="padding: 15px; color: white;background-color: #4F47BF;  width: 100%; height: 60px; margin-bottom: 35px;">
                                    SIGUIENTE
                                </button>
                                <div class="col"></div>
                            </div>
                        </form>
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