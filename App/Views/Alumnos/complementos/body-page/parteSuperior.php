<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        
        <h4 style="color: white;" id="nombreH1"></h4>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->

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

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5"  onclick="vistacorreo()">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Correo de Bienvenida</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5"  onclick="vistapostulacion()">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Correo de Postulación</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5"  onclick="vistaclave()">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Correo de Recuperación</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5"  onclick="vistaresumencv()">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Correo de resumen CV</span>
        </a>
    </li>

    <!-- ------------------- -->
    <br><br>
    <form method="post" action="/Login/logout">
        <input type="submit" class="btn-supervisor" value="Cerrar Sesión">
        <input type="hidden" name="op" value="CERRAR_SESION">
    </form>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">