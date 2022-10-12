<html>
<!-- Headers -->
<?php
include_once '../Header/HeaderCrediKemba.php';
include_once '../../Model/Conexion.php';

if (isset($_POST['val_monto'])) {

    $meses = $_POST['meses'];
    $monto = $_POST['monto'];

    // print_r($monto);die;
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<body style="background-color: #fff;overflow-y: auto !important;overflow-x: hidden !important;width: 100% !important;margin: 0px !important;">
    <div class="row">
        <div class="col">
            <?php
            include_once './MenuNav.php';
            ?>
        </div>
    </div>

    <div class="container">
        <!-- Titulo -->
        <div class="row">
            <!-- <div class="col-sm-1"></div> -->
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
                <div class="card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm text-center">
                                <p style="font-size: 2.2em;color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                                    MULTINIVEL
                                </p>
                            </div>
                        </div>
                        <form action="simulacion.php" method="POST
                        ">
                            <input type="hidden" name="meses" value="<?php echo $meses; ?>">
                            <input type="hidden" name="monto" value="<?php echo $monto; ?>">
                            <!-- Monto -->
                            <div class="row" style="margin-top: 70px;">
                                <cdiv class="col-sm"></cdiv>
                                <div class="col-sm-8 text-center">
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <select class="form-select form-select-lg mb-3" name="tpEmpresa" aria-label=".form-select-lg example">
                                            <option value="Marketing Personal" selected>Marketing Personal</option>
                                            <option value="Avon">Avon</option>
                                            <option value="Omnilife">Omnilife</option>
                                            <option value="Label">Label</option>
                                            <option value="Flash mobile colombia">Flash mobile colombia</option>
                                        </select>
                                    </div>
                                </div>
                                <cdiv class="col-sm"></cdiv>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-10">
                                    <label style="text-align: left ; padding: 5px;" class="form-check-label" for="flexCheckDefault">
                                        Escoje una de las empresas listadas.
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-sm-9">
                                <button class="btn" name="sum_monto" style="padding: 15px; color: white;background-color: #4F47BF;  width: 100%; height: 60px; margin-bottom: 35px;">
                                    SIMULAR
                                </button>
                                </div>
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