<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Administrador</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="" onclick="controlVisi15()">
        <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Perfil Administrador</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Menú
</div>
    <!-- Nav Item - Pages Collapse Menu -->
    <div class="overflow-auto " style="max-height: 60vh;">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi1()">Carreras</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi2()">Categorias</span>
        </a>
    </li>

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
            aria-expanded="true" aria-controls="collapseUtilities3">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi3()">Cursos</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
            aria-expanded="true" aria-controls="collapseUtilities4">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi4()">Diccionario</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5"
            aria-expanded="true" aria-controls="collapseUtilities5">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi5()">Perfiles</span>
        </a>
    </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities6"
            aria-expanded="true" aria-controls="collapseUtilities6">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi6()">Publicaciones</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-toggle="collapse" data-target="#collapseUtilities7" aria-expanded="true"
            aria-controls="collapseUtilities7">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi7()">Reportes</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities8"
            aria-expanded="true" aria-controls="collapseUtilities8">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi8()">Usuarios</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities9"
            aria-expanded="true" aria-controls="collapseUtilities9">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi9()">Archivos</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities10"
            aria-expanded="true" aria-controls="collapseUtilities10">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi10()">Comentarios</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities11"
            aria-expanded="true" aria-controls="collapseUtilities11">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi11()">Ofertas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities12"
            aria-expanded="true" aria-controls="collapseUtilities12">
            <i class="fas fa-fw fa-wrench"></i>
            <span href="#" onclick="controlVisi12()">Postulaciones</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities13"
            aria-expanded="true" aria-controls="collapseUtilities13">
            <i class="fas fa-fw fa-wrench"></i>
            <span  href="#" onclick="controlVisi13()">Experiencia Académica</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities14"
            aria-expanded="true" aria-controls="collapseUtilities14">
            <i class="fas fa-fw fa-wrench"></i>
            <span  href="#" onclick="controlVisi14()">Experiencia Laboral</span>
        </a>
    </li>
</div>


<!-- ------------------- -->

        <form method="post" action="App/Views/Login/logout.php">
            <input type="submit" class="btn-CSesion" value="Cerrar Sesión">
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

    <!-- Main Content -->
    <div id="content">


