<?php include_once('../../config/sesiones.php') ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Dashboard/">
    
    <div class="sidebar-brand-text mx-3">ENNER GYM </div>
   
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu General
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-table"></i>
        <span>Datos</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu</h6>
        <?php
if (error_reporting(0)) {
    $rol_id = $_SESSION['rol_id'];

    if ($rol_id == '2') {
        echo '<a class="collapse-item" href="../Clientes/cliente.views.php">Clientes</a>';
        echo '<a class="collapse-item" href="../Membresias/Membresias.views.php">Membresias Activas</a>';
        echo '<a class="collapse-item" href="../MembresiaExpirada/Emembresia.views.php">Membresia Expiradas</a>';
        echo '<a class="collapse-item" href="../Facturas/facturas.views.php">Facturas</a>';
    } elseif ($rol_id == '1') {
        echo '<a class="collapse-item" href="../Empleados/empleados.views.php">Empleados</a>';
        echo '<a class="collapse-item" href="../Clientes/cliente.views.php">Clientes</a>';
        echo '<a class="collapse-item" href="../Tipo_Membresias/Tipo.Membresias.views.php">Tipo Membresia</a>';
        echo '<a class="collapse-item" href="../Membresias/Membresias.views.php">Membresias Activas</a>';
        echo '<a class="collapse-item" href="../MembresiaExpirada/Emembresia.views.php">Membresia Expiradas</a>';
        echo '<a class="collapse-item" href="../Facturas/facturas.views.php">Facturas</a>';
        echo '<a class="collapse-item" href="../TablasMonto/TablaMonto.views.php">Tabla Monto</a>';
    }
}
?>
    </div>
</div>


</li>

<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <div class="collapse-divider"></div>

       
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<!--<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>-->

<!-- Nav Item - Tables -->
<!--<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>-->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->


<!-- Sidebar Message -->

</ul>