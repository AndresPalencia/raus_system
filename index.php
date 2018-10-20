<?php
session_start();
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


    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="js/alertify/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertify/css/themes/bootstrap.css">
    <script src="js/alertify/alertify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

</head>

<body>

<?php
include("header.php");
?>

<div class="social-bar">
    <a href="https://www.twitter.com/rausystem?lang=es" class=" icon icon-twitter"  target="_blank"></a>
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
                    <!--<a href="#contact" class="btn-get-started scrollto">Registrate</a>-->
                    <!--<a href="#login" class="btn-get-started scrollto">Ingresa</a>-->
                </div>
            </div>

        </div>
    </div>
</section><!-- #Intro -->

<main id="main">


    <!--==========================
      Conocenos Section
    ============================-->

    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Conocenos</h3><br>
                <p>Sistema de registro para artistas urbanos en toda la regi&oacute;n del Distrito Capital</p>
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
                            Establecer a traves de este instrumento tecnol&oacute;gico y de patrocinio un espacio que permita la inclusi&oacute;n social de todos los jovenes artistas y nuevos talentos de la cultura urbana a nivel regional
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
                            <li>Postular jovenes artistas y nuevos talentos de la cultura urbana a nivel regional</li>
                            <li>Promover jovenes artistas y nuevos talentos de la cultura urbana a nivel regional</li>
                            <li>Producir jovenes artistas y nuevos talentos de la cultura urbana a nivel regional</li>
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
                            Consolidar este instrumentos tecnol&oacute;gico y de patrocinio como una organizaci&oacute;n social en apoyo a todos los jovenes artistas y nuevos talentos de la cultura urbana a nivel regional
                        </p>
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
                    <div class="elfsight-app-5e3f40e1-f90b-4ff1-ae0b-9d2bacd7e7e8"></div>
                </div>
            </div>

        </div>
    </section><!-- #Conocenos -->
    <br><br><br>

    <!--==========================
      Noticias Section
    ============================

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
                        <li data-filter=".filter-sis">Zona Sur</li>
                        <li data-filter=".filter-web">Zona Este</li>
                        <li data-filter=".filter-mov">Zona Oeste</li>
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
                            <p>Zona Este</p>
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

                <div class="col-lg-4 col-md-6 portfolio-item filter-sis wow fadeInUp">
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
                            <p>Zona Este</p>
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

                <div class="col-lg-4 col-md-6 portfolio-item filter-mov wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="img/portfolio/news.png" class="img-fluid" alt="">
                            <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="#">Noticia 1</a></h4>
                            <p>Zona Oeste</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sis wow fadeInUp" data-wow-delay="0.1s">
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

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="img/portfolio/news.png" class="img-fluid" alt="">
                            <a href="img/portfolio/news.png" class="link-preview" data-lightbox="portfolio" data-title="Noticia 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="#">Noticia 3</a></h4>
                            <p>Zona Este</p>
                        </div>
                    </div>
                </div>

            </div>
            <br>
        </div>
</section> #Noticias -->
    
    

    <!--==========================
      Crew Section
    ============================
    <br>
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Crew</h3><br>
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
    </section> #Crew-->
    <br>



    <!--==========================
      Registro Inscripcion Section
    ============================-->

    <br>
    <div class="form" <?php if (isset($_SESSION['user'])) 
        echo "style='display:none;'"; ?>
        >
        <section id="contact" class="">
            <div class="container">

                <div id="errormessage"></div>
                <form action="functions/registrar.php" id="registro" name="registro" method="post" novalidate onsubmit="return validaCampos();">

                    <div class="section-header">
                        <h3>Registro</h3>
                    </div>

                    <br>
                    <section id="call-to-action" class="wow fadeIn">
                        <div class="container text-center">
                            <h3>Seleccione</h3>
                            <center><div class="form col-md-4">
                                    <select class="form-control" name="cbx_tipo_user" class="form-control" id="cbx_tipo_user" placeholder="Tipo de usuario" required data-msg="Seleccione tipo de usuario">
                                        <option value="">Seleccionar Opci&oacute;n</option>
                                        <option value="1">Soy Ente Cultural</option>
                                        <option value="2">Soy Artista Urbano</option>
                                    </select>
                                </div>
                            </center>
                        </div>
                    </section>
                    <br>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required data-msg="Ingrese su nombre" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido" required data-msg="Ingrese su apellido" />
                        </div>
                        <div class="form-group col-md-1">
                            <select name="pre_id_doc" class="form-control" id="pre_id_doc">

                                <option value="V">V</option>
                                <option value="E">E</option>
                                <option value="J">J</option>
                                <option value="G">G</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="id_doc" id="id_doc" placeholder="C.I / RIF" onkeypress="return validaNumericos(event)"/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña" required data-msg="Ingrese su password" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="repass" class="form-control" id="repass" placeholder="Repetir Contraseña" data-rule="required" data-msg="Ingrese su password" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select name="cbx_estado" class="form-control" id="cbx_estado" placeholder="Estado" data-msg="Seleccione estado">
                                <option value="">Seleccionar Estado</option>
                                <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-4">
                            <select name="cbx_municipio" id="cbx_municipio" class="form-control" placeholder="Municipio" data-msg="Seleccione municipio">
                                <option value="">Seleccionar Municipio</option>
                            </select>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-4">
                            <select name="cbx_parroquia" id="cbx_parroquia" class="form-control"  placeholder="Parroquia" data-msg="Seleccione parroquia">
                                <option value="">Seleccionar Parroquia</option>
                            </select>
                            <div class="validation"></div>
                        </div>

                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="address" rows="5" placeholder="Direcci&oacute;n"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <select name="cod_tel" class="form-control" id="cod_tel">
                                <option value="0212">0412</option>
                                <option value="0414">0414</option>
                                <option value="0424">0424</option>
                                <option value="0416">0416</option>
                                <option value="0426">0426</option>
                                <option value="0412">0412</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <input type="phone" name="phone" class="form-control" id="phone" required placeholder=" Telefono 000-00-00" data-rule="phone" data-msg="Ingrese un telefono valido" />
                            <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" required data-msg="Ingrese un correo valido" />
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
                        <input class="text-center btn btn-lg btn-block" type="submit" id="registro" value="Registrarse" name="registro" >
                    </div>
                </form>

            </div>

    </div>
    </section><!-- #Registro Inscripcion -->

</main>

<?php
include("footer.php");
?>



<script type="text/javascript">
    $("#phone").inputmask({"mask": "999-9999"});

    $(document).ready(function(){

        $("#cbx_estado").change(function () {
            $('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
            $("#cbx_estado option:selected").each(function () {
                id_estado = $(this).val();
                $.post("includes/municipios.php", { id_estado: id_estado }, function(data){
                    $("#cbx_municipio").html(data);
                });
            });
        })
    });

    $(document).ready(function(){

        $("#cbx_municipio").change(function () {
            $("#cbx_municipio option:selected").each(function () {
                id_municipio = $(this).val();
                $.post("includes/parroquias.php", { id_municipio: id_municipio }, function(data){
                    $("#cbx_parroquia").html(data);
                });
            });
        })
    });



   $("#login").click(function(){  
      
        username=$("#user").val();  
        password=$("#password").val();  
         $.ajax({  
            type: "POST",  
            url: "login.php",  
            data: "user="+username+"&password="+password,  
            success: function(html){  

              if(html=='ente_suscripcion')  
              {  
                window.open('registrar_suscripcion_ente.php','_self');                 
              }else if(html=='ente'){
                window.open('raus.php','_self');
              }else if (html=='artista_suscripcion') {
                window.open('registrar_suscripcion_artista.php','_self');
              } else if (html=='artista') {
                window.open('raus.php','_self');
              }else
              {  
                alertify.error("Alguno de sus datos son incorrectos."); 
              }  
            },  
            beforeSend:function()  
            {  
                 $("#add_err").html("Cargando...")  
            }  
        });  
         return false;  
    });  
 



</script>
<script src="js/registrar.js"></script>


</body>
</html>


