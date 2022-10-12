<?php
include '../Header/HeaderPopUp.php';
$fullName = $_GET['name']; ?>

<div class="body_Modal">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="text-align: center; align-items: center;">
                    <svg style="color: rgba(228, 63, 90, 0.75);" xmlns="http://www.w3.org/2000/svg" width="120" height="115" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                    </svg>
                    <br>
                    <br>
                    <p>Señor <?php echo $fullName; ?>, su número de documento o su correo electónico ya se encuentra registrado en el sistema, click en continuar para ir a la Navegación</p>
                    <a href="../index.php" style=" border: none; background-color: rgba(228, 63, 90, 0.75); color: white ;" type="button" class="btn btn">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</div>