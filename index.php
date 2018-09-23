<?php
include("database/db_conection.php");
include("includes/estados.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RAUSystem</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons 
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
-->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="css/font.css">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
 
 


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">RAUS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      
      <!-- Menu de navegacion superior -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Conocenos</a></li>
          <li><a href="#portfolio">Noticias</a></li>
          <li><a href="#team">Crew</a></li>
         <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><div class="social-links">
              <a href="https://www.twitter.com/rausystem"  target="_blank"><i class=" fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Rausystem-173642113498124/" target="_blank"><i class=" fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" target="_blank"><i class=" fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" target="_blank"><i class=" fa fa-youtube"></i></a>
          </div></li>
        </ul>
      </nav>
      <!-- Cierro menu de navegacion superior -->

    </div>
  </header><!-- #header -->

  <div class="social-bar">
    <a href="https://twitter.com/raus03894003" class=" icon icon-twitter"  target="_blank"></a>
    <a href="https://www.facebook.com/Rausystem-173642113498124/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" class="icon icon-youtube" target="_blank"></a>
  </div>


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide " data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
           
          </div>
        </div>
        <div class="carousel-container">
          <div class="carousel-content col-md-6">
            <h2>BIENVENIDO</h2>
              <p></p>
                <a href="#contact" class="btn-get-started scrollto">Registrate</a>
                <a href="#login" class="btn-get-started scrollto">Ingresar</a>
            </div>
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

 
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Conocenos</h3>
          <p>Sistema de registro para artistas urbanos de la regi&oacute;n del Distrito Capital</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misi&oacute;n</a></h2>
              <p align="justify">
                Establecer un espacio de inclusi&oacute;n social para todos los artistas de la cultura urbana a nivel regional. 
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Objetivos</a></h2>
              <p>
                <ul>
                  <li>Postular</li>
                  <li>Promover</li>
                  <li>Producir</li>
                </ul>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visi&oacute;n</a></h2>
              <p align="justify">
                Consolidar una organizaci&oacute;n en apoyo a todos los artistas de la cultura urbana a nivel regional. 
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

   

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Noticias</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Zona Norte</li>
              <li data-filter=".filter-card">Zona Sur</li>
              <li data-filter=".filter-web">Zona Centro</li>
              <li data-filter=".filter-web">Zona Este</li>
              <li data-filter=".filter-web">Zona Oeste</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" data-lightbox="portfolio" data-title="Noticia 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 1</a></h4>
                <p>Zona Norte</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 1</a></h4>
                <p>Zona Centro</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 2</a></h4>
                <p>Zona Norte</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 1</a></h4>
                <p>Zona Sur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 2</a></h4>
                <p>Zona Centro</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 3</a></h4>
                <p>Zona Norte</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 2</a></h4>
                <p>Zona Sur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 3</a></h4>
                <p>Zona Sur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/news.png" class="img-fluid" alt="">
                <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Noticia 3</a></h4>
                <p>Zona Centro</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
    <div class="row">
       <div class="col-md-6 twitter-content" >
        <a class="twitter-timeline" data-lang="es" data-height="850" data-link-color="#00c5cd" href="https://twitter.com/rausystem">Tweets by Raus</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="col-md-6">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-23f253b5-3f3b-4ca0-8b32-00b1de46a02b"></div>
      </div>
          
      
    </div>
 </div>  
    </section><!-- #portfolio -->

   
   
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Crew</h3>
          <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/crew/grupo1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ZONA NORTE</h4>
                  <span></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/crew/grupo2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ZONA SUR</h4>
                  <span></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/crew/grupo3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ZONA ESTE</h4>
                  <span></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/crew/grupo4.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>ZONA OESTE</h4>
                  <span></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

 <!--==========================
      Call To Action Section
    ============================-->
 <br>
<section id="login" class="section-bg wow fadeInUp">
      <div class="container">
<br><br>
        <div class="section-header">
          <h3>Ingresar</h3><br>
          <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
         </div>
         <center>
           <div class="form form-login col-md-4 ">
             <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="user" class="form-control" id="user" placeholder="Numero de Usuario" data-rule="required" data-msg="Ingrese su numero de usuario" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" data-rule="required" data-msg="Ingrese su Contraseña" />
                <div class="validation"></div>
              </div>
               <div class="text-center">
                  <input class="text-center btn btn-lg btn-block" type="submit" value="Ingresar" name="login" >
                </div>
            
            </form>

          </div>


         </center> 

        
      </div><br><br>
    </section><!-- #call-to-action -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="">
      <div class="container">

        <div class="section-header">
          <h3>Registro</h3>
          <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>
         <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Seleccione</h3>
        <center><div class="form col-md-4">
          <select class="form-control">
            <option active value="volvo"></option>
            <option value="volvo">Soy Ente Cultural</option>
            <option value="saab">Soy Artista Urbano</option>
          </select>

        </div></center>
        <!--<a class="cta-btn" href="#">Call To Action</a>-->
      </div>
    </section><!-- #call-to-action -->
<br>
<br>

        <div class="form">
          <div id="sendmessage">Registro Exitoso</div>
          <div id="errormessage"></div>
          <form action="index.php" id="registro" name="registro" method="post" role="form" class="contactForm">
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña" data-rule="required" data-msg="Ingrese su password" />
                <div class="validation"></div>
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="required" data-msg="Ingrese su nombre" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="lastname" class="form-control" name="lastname" id="lastname" placeholder="Apellido" data-rule="required" data-msg="Ingrese su apellido" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="id" class="form-control" name="id" id="id" placeholder="C.I / RIF / Pasaporte" data-rule="required" data-msg="Ingrese su n&uacute;mero de documento" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <select name="cbx_estado" class="form-control" id="cbx_estado" placeholder="Estado" data-rule="required" data-msg="Seleccione estado">
                  <option value="0">Seleccionar Estado</option>
                  <?php while($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
                  <?php } ?>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-4">
                  <select name="cbx_municipio" id="cbx_municipio" class="form-control" placeholder="Municipio" data-rule="required" data-msg="Seleccione municipio">
                  <option value="0">Seleccionar Municipio</option>
                </select>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
              <select name="cbx_parroquia" id="cbx_parroquia" class="form-control"  placeholder="Parroquia" required data-msg="Seleccione parroquia">
               <option value="0">Seleccionar Parroquia</option>
                </select>  
                <div class="validation"></div>
              </div>
            </div>

              <div class="form-group">
              <textarea class="form-control" name="address" rows="5"  data-msg="" placeholder="Direcci&oacute;n"></textarea>
              <div class="validation"></div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="phone" name="name" class="form-control" id="name" placeholder=" Telefono (0000) 000-00-00" data-rule="phone" data-msg="Ingrese un telefono valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="lastname" id="lastname" placeholder="Correo" data-rule="email" data-msg="Ingrese un correo valido" />
                <div class="validation"></div>
              </div>
            </div>
            
       <!--
            <center>
              <div class="form-group col-md-4">
                Cargar Resumen Curricular 
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
             </div>
            </center>
        -->    

            <div> 


            <input class="text-center btn btn-lg btn-block" type="submit" value="Registrarse" name="register" >

            </div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright 2018 <strong>RAUS</strong>. Todos los derechos reservados 
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

   <script type="text/javascript">
          $(document).ready(function(){
        $("#cbx_estado").change(function () {
 
          $('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
          $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("includes/getMunicipios.php", { id_estado: id_estado }, function(data){
              $("#cbx_municipio").html(data);
            });            
          });
        })
      });
      
      $(document).ready(function(){
        $("#cbx_municipio").change(function () {
          $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("includes/getParroquia.php", { id_municipio: id_municipio }, function(data){
              $("#cbx_parroquia").html(data);
            });            
          });
        })
      });
  </script>
</body>
</html>


<?php


if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>