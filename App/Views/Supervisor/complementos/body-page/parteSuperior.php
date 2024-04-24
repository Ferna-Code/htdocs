<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
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
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" onclick="controlVisi1()"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Reportes</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="#" >Ver Reportes</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Publicaciones</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi2()">Ver Publicaciones</a>
                <a class="collapse-item" href="#">Crear Publicación</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Carreras</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi3()">Ver Carreras</a>
                <a class="collapse-item" href="#">Crear Carrera</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3"
            aria-expanded="true" aria-controls="collapseUtilities3">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Curso</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi4()">Ver Cursos</a>
                <a class="collapse-item" href="#" onclick="controlCurso()">Agregar curso</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4"
            aria-expanded="true" aria-controls="collapseUtilities4">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Perfiles</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi5()">Ver Perfiles</a>
                <a class="collapse-item" href="#">Crear Perfil</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5"
            aria-expanded="true" aria-controls="collapseUtilities5">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUtilities5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi6()">Ver usuarios</a>
                <a class="collapse-item" href="#">Agregar usuario</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities6"
            aria-expanded="true" aria-controls="collapseUtilities6">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Categorias</span>
        </a>
        <div id="collapseUtilities6" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi7()">Ver Categorias</a>
                <a class="collapse-item" href="#">Crear Categoria</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities7"
            aria-expanded="true" aria-controls="collapseUtilities7">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Diccionario</span>
        </a>
        <div id="collapseUtilities7" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="#" onclick="controlVisi8()">Ver Diccionario</a>
                <a class="collapse-item" href="#">Agregar Palabra</a>
                <a class="collapse-item" href="#">Animations</a>
                <a class="collapse-item" href="#">Other</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" onclick="controlVisi9()" data-toggle="collapse" data-target="#collapseUtilities8"
            aria-expanded="true" aria-controls="collapseUtilities8">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Ofertas laborales</span>
        </a>
    </li>

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

        