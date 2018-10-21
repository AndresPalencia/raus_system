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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
            <h4 align="center"><b>USUARIOS</b></h4>
            <div class="row"><div class="col-md-6" align="justify">
                <h6 align="center"><p><b>Artista</b></h6> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, tortor quis faucibus mollis, nisi purus scelerisque sapien, eu dignissim nulla mi quis ex. Phasellus sed ante nunc. Vestibulum pretium elit ut felis tristique, vitae viverra est elementum. Mauris aliquam mauris a eros dapibus molestie. Quisque sollicitudin risus nec sagittis ullamcorper. Nam libero est, vulputate nec tellus nec, tincidunt malesuada nisl. Pellentesque ultrices et dolor quis consequat. Nunc id malesuada dolor. Phasellus consectetur erat varius nunc dictum, eget laoreet elit finibus. Aliquam condimentum neque quis quam aliquet, at dignissim arcu sagittis.</p>
             </div>
            
            <br>
                <div class="col-md-6" align="justify">
                <h6 align="center">    <p><b>Ente:</b></h6> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate, tortor quis faucibus mollis, nisi purus scelerisque sapien, eu dignissim nulla mi quis ex. Phasellus sed ante nunc. Vestibulum pretium elit ut felis tristique, vitae viverra est elementum. Mauris aliquam mauris a eros dapibus molestie. Quisque sollicitudin risus nec sagittis ullamcorper. Nam libero est, vulputate nec tellus nec, tincidunt malesuada nisl. Pellentesque ultrices et dolor quis consequat. Nunc id malesuada dolor. Phasellus consectetur erat varius nunc dictum, eget laoreet elit finibus. Aliquam condimentum neque quis quam aliquet, at dignissim arcu sagittis.</p>
             </div></div>
            
            
           
            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="img/mission.jpg" alt="" class="img-fluid">
                            <!--<div class="icon"><i class="ion-ios-speedometer-outline"></i></div>-->
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
                            <!--<div class="icon"><i class="ion-ios-list-outline"></i></div>-->
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
                            <!--<div class="icon"><i class="ion-ios-eye-outline"></i></div>-->
                        </div>
                        <h2 class="title"><a href="#">Visi&oacute;n</a></h2>
                        <p align="justify">
                            Consolidar este instrumentos tecnol&oacute;gico y de patrocinio como una organizaci&oacute;n social en apoyo a todos los jovenes artistas y nuevos talentos de la cultura urbana a nivel regional
                        </p>
                    </div>
                </div>

            </div>

        </div>
            
    </section><!-- #Conocenos -->
    <br>

    <section id="social"  class="section-bg" >
        <br>
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Social Media</h3>
            </header>
            <br>
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
        </div>
    </section>
    <br>
    <br>

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
                                        <option value="">Seleccionar Opci&oacute;n</option><div class="required">*</div>
                                        <option value="1" data-toggle="tooltip" data-placement="bottom" title="Ente">Soy Ente Cultural</option>
                                        <option value="2" data-toggle="tooltip" data-placement="bottom" title="Artista">Soy Artista Urbano</option>
                                    </select>
                                </div>
                            </center>
                        </div>
                    </section>
                    <br>
                    <div class="required">* Todos los campos son obligatorios</div>

                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-4">               
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido" required/>
                        </div>
                        <div class="form-group col-md-1">
                            <select name="pre_id_doc" class="form-control" id="pre_id_doc">

                                <option value="V">V</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" name="id_doc" id="id_doc" placeholder="C.I" onkeypress="return validaNumericos(event)"/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" name="repass" class="form-control" id="repass" placeholder="Repetir Contraseña" required/>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select name="cbx_estado" class="form-control" id="cbx_estado" placeholder="Estado">
                                <option value="">Seleccionar Estado</option>
                                <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <select name="cbx_municipio" id="cbx_municipio" class="form-control" placeholder="Municipio">
                                <option value="">Seleccionar Municipio</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <select name="cbx_parroquia" id="cbx_parroquia" class="form-control"  placeholder="Parroquia">
                                <option value="">Seleccionar Parroquia</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="address" name="address" rows="5" placeholder="Direcci&oacute;n"></textarea>
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
                            <input type="phone" name="phone" class="form-control" id="phone" required placeholder=" Telefono 000-00-00"/>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" />
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
                        <input class="text-center btn btn-lg btn-block" type="submit" id="registro_btn" value="Registrarse" name="registro" >
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

    $("#registro_btn").click(function(){  
      
        name=$('#name').val();
        lastname=$('#lastname').val();
        id_doc=$('#id_doc').val();
        pre_id_doc=$('#pre_id_doc').val();
        pass=$('#pass').val();
        repass = $("#repass").val();
        estado = $("#cbx_estado").val();
        municipio = $("#cbx_municipio").val();
        address=$('#address').val();
        phone=$('#phone').val();
        cod_tel=$('#cod_tel').val();
        email=$('#email').val();  
        cbx_parroquia=$('#cbx_parroquia').val();
        cbx_tipo_user=$('#cbx_tipo_user').val(); 
        val_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
        val_pass = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/

        if($.trim(cbx_tipo_user) == ""){
        alertify.error('Seleccione Tipo de Usuario');
        document.getElementById("cbx_tipo_user").focus();
        return false;
        }

        if($.trim(name) == ""){
            alertify.error('Escriba su Nombre');
            document.getElementById("name").focus();
            return false;
        }

        if($.trim(lastname) == ""){
            alertify.error('Escriba su Apellido');
            document.getElementById("lastname").focus();
            return false;
        }

        if($.trim(id_doc) == ""){
            alertify.error('Escriba su C.I');
            document.getElementById("id_doc").focus();
            return false;
        }

         $.ajax({  
            type: "POST",  
            url: "functions/registrar.php",  
            data: "name="+name+
                  "&lastname="+lastname+ 
                  "&id_doc="+id_doc+
                  "&pre_id_doc="+pre_id_doc+
                  "&pass="+pass+
                  "&address="+address+
                  "&phone="+phone+
                  "&cod_tel="+cod_tel+
                  "&email="+email+
                  "&cbx_parroquia="+cbx_parroquia+
                  "&cbx_tipo_user="+cbx_tipo_user,  
            success: function(html){  
       

            if(html=='email_repetido')  
            {  
                alertify.error("El email ya se encuentra en uso por otro usuario"); 
                document.getElementById("email").focus();
                exit();

              }else if(html=='doc_repetido'){
                alertify.error("El Documento de indentidad ya se encuentra en uso por otro usuario");
                document.getElementById("id_doc").focus();
                exit();
   
              }else if (html=='artista_suscripcion') {
                 alertify.success("Usuario Registrado Existosamente.");
                window.open('registrar_suscripcion_artista.php','_self');
                

              } else if (html=='ente_suscripcion') {
                alertify.success("Usuario Registrado Existosamente.");
                window.open('registrar_suscripcion_ente.php','_self');
                

              }else if(html=='error')
              {  
                alertify.error("Error al Registrar"); 
              }
            if($.trim(pass).length <8 ){
            alertify.error('La contraseña debe ser mayor de 8 caracteres');
            document.getElementById("pass").focus();
            return false;
            }
            if(!val_pass.test(pass)) {
                alertify.error('La contraseña debe contener al menos 1 mayuscula, 1 numero y un caracter especial (#$%/@=&).');
                document.getElementById("pass").focus();

                return false
            }

            if($.trim(repass).length <1 ){
            alertify.error('Repita su contraseña');
            document.getElementById("repass").focus();
            return false;
            }           

            if($.trim(pass) != "" && pass !=repass){
                alertify.error('Las contraseñas no coinciden');
                document.getElementById("repass").focus();
                return false;
            }

            if($.trim(estado) == ""){
                alertify.error('Seleccione Estado');
                document.getElementById("cbx_estado").focus();
                return false;
            }
            if($.trim(municipio) == ""){
                alertify.error('Seleccione Municipio');
                document.getElementById("cbx_municipio").focus();
                return false;
            }

            if($.trim(cbx_parroquia) == ""){
                alertify.error('Seleccione Parroquia');
                document.getElementById("cbx_parroquia").focus();
                return false;
            }

            
             if($.trim(address) == ""){
                alertify.error('Escriba su Direccion');
                document.getElementById("address").focus();
                return false;
            }

            if($.trim(phone) == ""){
                alertify.error('Escriba su Numero de Telefono');
                document.getElementById("phone").focus();
                return false;
            }

            if($.trim(email) == ""){
                alertify.error('Escriba su Correo Electronico');
                document.getElementById("email").focus();
                return false;
            }
            if(!val_email.test(email)) {
                alertify.error('El contenido del campo email no es válido.');
                document.getElementById("email").focus();

                return false
            }

            }
        });  
         return false; 

           
    });  



</script>
<script src="js/registrar.js"></script>


</body>
</html>


