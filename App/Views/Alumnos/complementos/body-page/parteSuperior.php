<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">

        <div class="sidebar-brand-text mx-3"> Luis Yañez <sup></sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">

        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">

    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo" onclick="controlVisi1()">
            <i class="fas fa-fw fa-cog"></i>
            <span>Muro principal</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true"
            aria-controls="collapse10" onclick="controlVisit10()">
            <i class="fas fa-fw fa-cog"></i>
            <span>Mi Muro</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
            aria-controls="collapse2" onclick="controlVisi2()">
            <i class="fas fa-fw fa-cog"></i>
            <span>Perfil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
            aria-controls="collapse3" onclick="controlVisi3()">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cursos</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
            aria-expanded="true" aria-controls="collapseUtilities3" onclick="vistaofertas()">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Ofertas Laborales</span>
        </a>
    </li>

    <!-- <li class="nav-item">
        <form method="post" action="App/Views/Login/logout.php">
            <input type="submit" class="btnCerrar" value="Cerrar sesión">
            <input type="hidden" name="op" value="CERRAR_SESION">
        </form>
    </li> -->

    <!-- ------------------- -->
    <br><br>
    <form method="post" action="App/Views/Login/logout.php">
        <input type="submit" class="btn-supervisor" value="Cerrar Sesión">
        <input type="hidden" name="op" value="CERRAR_SESION">
    </form>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <script src="../../../../Public/js/alumnos.js"></script>
    <script src="../../../../public/js/perfilalumno.js"></script>