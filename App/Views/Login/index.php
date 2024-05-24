<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Login - RedLeones</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./Public/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./Public/css/style.css">
    <link href="./Public/css/estiloLogin.css" rel="stylesheet">
   
    <!-- Responsive-->
    <link rel="stylesheet" href="./Public/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="./Public/img/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="./Public/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="./Public/img/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="imglogo">
                            <a href="index.html"><img src="./Public/img/logo.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="right_bottun">
                            <ul class="conat_info d_none ">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                            
                            <a href="./empresa/index" class="btn-laboral">Publica tu oferta laboral</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- LOGIN -->
    <section class="banner_main">
        <div id="banner1" class="" data-ride="">
            <div class="">
                <div class="">
                    <div class="container-fluid">
                        <div class="">
                            <div class="row">
                                <div class="col-md-7 col-lg-5">
                                    <div class="text-bg">
                                        <h1>RedLeones</h1>
                                        <span>Conecta con egresados, comparte información, Mantente en línea.</span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-7"
                                    style="background-color: #F8B619; padding: 30px; height: 400px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ban_track">
                                                <figure></figure>
                                            </div>
                                        </div>
                                        <div class="col-md-6 contBox">
                                            <form method="post" action="" class="transfot">
                                                <div class="col-md-12">
                                                    <h1 style="margin-top: 12px;"> Ingresa a la Red</h1><br>
                                                </div>
                                                <div class="col-md-12 contInput" >
                                                    <input type="text" class="inputRut" name="rut" id="rut" placeholder="Ingrese su RUT">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="password" class="inputPass" name="clave" id="clave" placeholder="Ingrese su clave">
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="#" class="linkLeft" target="_black">¿ Olvido su contraseña
                                                        ?</a>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn-oferta" value="Ingresar">
                                                    <input type="hidden" name="op" value="LOGIN">
                                                    <?php  ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- service section -->
    <section>
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="titlepage">
                            <h2>¿Qué podrás encontrar?</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service_main">
                            <div class="service_box ">
                                <i><img src="./public/img/aprender-en-linea.png" alt="#" /></i>
                                <h4>Cursos con Certificaciones</h4>
                            </div>
                            <div class="service_box ">
                                <i><img src="./public/img/red.png" alt="#" /></i>
                                <h4>Amplía tu red</h4>
                            </div>
                            <div class="service_box ">
                                <i><img src="./public/img/empresario.png" alt="#" /></i>
                                <h4>Ofertas Laborales</h4>
                            </div>
                            <div class="service_box ">
                                <i><img src="./public/img/curriculum.png" alt="#" /></i>
                                <h4>Mantente informado</h4>
                            </div>
                            <div class="service_box">
                                <i><img src="./public/img/periodico.png" alt="#" /></i>
                                <h4>Actualiza tu información</h4>
                            </div>
                            <div class="service_box">
                                <i><img src="./public/img/diario.png" alt="#" /></i>
                                <h4>Potencia tu alcance</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->
    <!-- sobre nosotros -->
    <section style="margin-top: 380px;">
        <div id="about" class="about">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-sm-8">
                        <div class="about_right">
                            <figure><img class="imgnosotros" src="./Public/img/nosotros1.jpg" alt="#" /></figure>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="titlepage">
                            <h2>Nosotros</h2>
                            <p> Somos estudiantes del último año de la carrera de Analista Programador y hemos creado
                                esta red para que los egresados puedan manterse en contacto, facilitando la colaboración
                                y el apoyo continuo tras finalizar sus estudios.
                            </p>
                            <a class="read_more" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!--  footer -->
    <footer>
        <div class="footer bottom_cross1">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <h2>Contáctanos</h2>
                        <ul class="location_icon">
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> Diandra
                                Palacios
                            </li>
                            <li><a href="https://www.linkedin.com/in/fernando-javier-reyes-luengo-a99650282" target="black_"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> Fernando Reyes
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> Leonardo Campos
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2024 All Rights Reserved. DFL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="./Public/js/jquery.min.js"></script>
    <script src="./Public/js/popper.min.js"></script>
    <script src="./Public/js/bootstrap.bundle.min.js"></script>
    <script src="./Public/js/jquery-3.0.0.min.js"></script>
    <script src="../../../../public/js/login.js"></script>


    <!-- sidebar -->
    <script src="./Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./Public/js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        <?php if ($_SESSION['errorsesionfallida']): ?>
            alertaErrorAutenticacion("<?php echo $_SESSION['errorsesionfallida']; ?>"); 
             <?php unset($_SESSION['errorsesionfallida']); ?> <?php endif; ?> ;

    </script>
</body>

</html>