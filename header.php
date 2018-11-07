<script type="text/javascript">
    history.forward();
    document.oncontextmenu = function(){return false;}
</script>

<form action="login.php" method="POST" id="login_form">
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto">RAUS</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="#about">Con&oacute;cenos</a></li>
                    <li><a href="#social">S&iacute;guenos</a></li>
                    <?php if (!isset($_SESSION['user'])){
                        echo '<li><a href="#contact">Registrate</a></li>';
                    }?>
                    <!-- <li class="menu-has-children"><a href="">Drop Down</a>
                       <ul>
                         <li><a href="#">Drop Down 1</a></li>
                         <li><a href="#">Drop Down 2</a></li>
                         <li><a href="#">Drop Down 3</a></li>
                         <li><a href="#">Drop Down 4</a></li>
                       </ul>
                     </li>-->
                    <?php if (isset($_SESSION['user'])){
                        echo '<li class="menu-has-children"><a href="#" style="color: white">Servicios</a>
                        <ul>
                        <li><a href="';
                        if($_SESSION['tipo_usuario']=='1'){
                            echo ('gestion_ente.php');
                        }else{
                            echo ('gestion_artista.php');
                        }
                        
                        echo '">PAUTAS</a></li>
                      <li><a href="';
                        if($_SESSION['tipo_usuario']=='1'){
                            echo ('consulta_ente.php');
                        }else{
                            echo ('consulta_artista.php');
                        }
                        
                        echo '">GESTI&Oacute;N</a></li>
                    </ul>
                </li>';

                        echo '
                        <li><a href="';
                         if($_SESSION['tipo_usuario']=='1'){
                            echo ('registrar_suscripcion_ente.php');
                        }else{
                            echo ('registrar_suscripcion_artista.php');
                        }

                        echo '"><span class="fa fa-user"></span> usuario '.$_SESSION['numero_unico_registro'].'</a>

                        </li>
                        <li><a href="logout.php" class="logout">  <span class="fa fa-sign-out"></span> Cerrar Sesion</a></li>'
                        ;
                    }else{
                        echo '
                        <li>
                           <input type="text" name="user" class="form-control-login" id="user" placeholder="C.I o Num de Registro" required data-msg="Ingrese su numero de usuario"/>
                        </li>
                        <li>
                           <input type="password" class="form-control-login" name="password" id="password" placeholder="Contraseña" required data-msg="Ingrese su Contraseña" />
                
                         </li>
                         <li>
                           <div class="text-center">
                              <input class="text-center btn btn-lg btn-block form-control btn-get-started-login" type="submit" value="Ingresar" name="login" id="login">
                            </div>                   
                      
                         </li> ';
                    }?>
             </ul>
            </nav>
       </div>
    </form>
</header>