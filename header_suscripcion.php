<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <h1><a href="index.php" class="scrollto">RAUS</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-has-children"><a href="#" style="color: white">Servicios</a>
                    <ul>
                      <li><a href="
                        <?php
                        if($_SESSION['tipo_usuario']=='1'){
                            echo ('gestion_ente.php');
                        }else{
                            echo ('gestion_artista.php');
                        }
                        ?>">PAUTAS</a></li>
                      <li><a href="
                        <?php
                        if($_SESSION['tipo_usuario']=='1'){
                            echo ('consulta_ente.php');
                        }else{
                            echo ('consulta_artista.php');
                        }
                        ?>">GESTI&Oacute;N</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="
                    <?php
                        if($_SESSION['tipo_usuario']=='1'){
                            echo ('registrar_suscripcion_ente.php');
                        }else{
                            echo ('registrar_suscripcion_artista.php');
                        }
                    ?>"
                    ><span class="fa fa-user"></span> usuario <?php echo $_SESSION['numero_unico_registro']; ?></a></li>
                <li class="nav-item"><a href="logout.php" class="logout">  <span class="fa fa-sign-out"></span> Cerrar Sesi&oacute;n</a></li>
            </ul>
        </nav>
    </div>
</header>