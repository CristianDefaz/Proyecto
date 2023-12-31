<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Tabla Montos";

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
        <style>
            @media print {
                .no-imprimir {
                    display: none;
                }
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php require_once('../html/menu.php') ?>
            <!-- End of Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Topbar -->
                    <?php include_once('../html/header.php')  ?>
                    <!-- End of Topbar -->

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"] ?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <button class='btn btn-info no-imprimir' id="btn" type='button'>
                                    Imprimir js
                                </button>
                               
                                <div class="card shadow mb-4" id='imprimir'>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="fechaDesdeInput">Fecha Desde:</label>
                                        </div>
                                        <input type="date" class="form-control" id="fechaDesdeInput" aria-label="Search by date" aria-describedby="basic-addon2">


                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="fechaHastaInput">Fecha Hasta:</label>
                                        </div>
                                        <input type="date" class="form-control" id="fechaHastaInput" aria-label="Search by date" aria-describedby="basic-addon2">

                                        <div class="input-group-append">
                                            <button class="btn btn-primary no-imprimir" type="button" onclick="filtrarPorFecha()">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Datos Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Membresia</th>
                                                    <th>Monto "$"</th>

                                                </tr>
                                            </thead>
                                            <tbody id='TablaFactura'></tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="sumaMontosInput">Suma Monto :</label>
                                                <input type="text" id="sumaMontosInput" class="form-control form-control-lg" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php include_once('../html/footer.php') ?>
                <!-- End of Footer -->
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>






        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>


        <script src="./Tablamonto.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Tu código JavaScript aquí
                var divToCapture = document.getElementById("imprimir");

                document.getElementById("btn").addEventListener("click", function() {
                    console.log("hola")
                    html2canvas(document.getElementById("imprimir")).then(canvas => {
                     //   document.body.appendChild(canvas)
                        var newWindow = window.open("", "_blank");
                        // Agregar el canvas a la nueva ventana
                        newWindow.document.body.appendChild(canvas);
                        newWindow.print();
                        newWindow.close();
                     
                    });;
                    /*html2canvas(divToCapture).then(function(canvas) {
                        var screenshotUrl = canvas.toDataURL("image/png");

                        var screenshotImg = document.getElementById("screenshotImg");
                        screenshotImg.src = screenshotUrl;
                        screenshotImg.style.display = "block";
                    });*/
                });
            });
        </script>


    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>