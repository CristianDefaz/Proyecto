<?php
include_once('../../config/sesiones.php');
if (isset($_SESSION["em_id"])) {
    $_SESSION["ruta"] = "Empleados";
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php require_once('../html/head.php')  ?>
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
                            <h1 class="h3 mb-0 text-gray-800"><?php echo $_SESSION["ruta"]?></h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Lista de <?php echo $_SESSION["ruta"]?></h6>
                                        <button onclick="cargaSelectRoles()" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalUsuarios"> Nuevo Empleado</button>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Cedula</th>
                                                    <th>Telefono</th>
                                                    <th>Correo</th>
                                                    <th>Rol</th>
                                                    <th>Opciones</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id='TablaEmpleado'></tbody>
                                        </table>
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



        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titulModalUsuarios">Nuevo Empleado</h5>
                        <button type="button" onclick="limpiar()" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form id="Empleados_form">
                                <div class="modal-body">
                                    <input type="hidden" name="em_id" id="em_id">

                                    <div class="form-group">
                                    <label for="em_nombre" class="control-label">Nombres</label>
                                    <input type="text" name="em_nombre" id="em_nombre" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="em_apellido" class="control-label">Apellidos</label>
                                        <input type="text" name="em_apellido" id="em_apellido" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="em_cedula" class="control-label">Cedula</label>
                                        <input type="text" name="em_cedula" id="em_cedula" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="em_telefono" class="control-label">Telefono</label>
                                        <input type="text" name="em_telefono" id="em_telefono" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="em_correo" class="control-label">Correo</label>
                                        <input type="mail" name="em_correo" id="em_correo" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="em_contrasena" class="control-label">Contrasena</label>
                                        <input type="text" name="em_contrasena" id="em_contrasena" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rol_id" class="control-label">Rol</label>
                                        <select name="rol_id" id="rol_id" class="form-control">
                                        </select>
                                    </div>
                                </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" onclick="limpiar()" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!--scripts-->
        <?php include_once('../html/scripts.php')  ?>
        <script src="./empleados.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location:../../index.php");
}
?>