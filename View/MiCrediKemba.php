<html>
<!-- Headers -->
<?php
include_once './Header/Headers.php';
include_once '../Model/Conexion.php'; ?>

<body>
    <?php include_once './MenuNav.php'; ?>
    
    <div class="container" onmousedown='return false;' onselectstart='return false;'>
        <!-- Titulo -->
        <div class="row">
            <div class="col-sm text-center">
                <p style="font-size: 3em;color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';font-weight: bold;">
                    MI CREDIKEMBA
                </p>
                <p>Nuestros emprendedores obtendrán créditos para que inicien sus negocios en empresas multinivel
                    debidamente constituidas y que cumplan con las normas de la legistación colombiana</p>
            </div>
        </div>
        <!-- End titulo -->
        <br>
        <br>
        <!-- Calculadora -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
                                    <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z" />
                                </svg>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h2 style="color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';">Simulador de
                                    Credito</h2>
                            </div>
                            <div class="col-sm">
                                <a href="./Credikemba/Simulador.php" class="btn" style="color: white;background-color: #4F47BF;  width: 120px; height: 40px; padding: 10px;">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <br>
        <!-- Archivo -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h2 style="color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';">Solicitud de
                                    Credito</h2>
                            </div>
                            <div class="col">
                                <button class="btn" style="color: white;background-color: #4F47BF;  width: 120px; height: 40px;">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <br>
        <!-- Carpeta -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm text-center">
                                <svg style="color: #4F47BF;" xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                    <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                                </svg>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h2 style="color: #4F47BF;font-family: 'BarlowSemiCondensed-SemiBold';">Documentos de
                                    Credito</h2>
                            </div>
                            <div class="col">
                                <button class="btn" style="color: white;background-color: #4F47BF;  width: 120px; height: 40px;">
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <br>
    </div>
    <!-- Se incluye el Footer (Pie de página) -->
    <?php include_once './Header/Footer.php'; ?>
</body>

</html>