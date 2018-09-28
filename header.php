  <!--==========================
    Header
  ===========================-->
 
  <form action="login.php" method="POST">
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">RAUS</a></h1>
      </div>
      
      <!-- Menu de navegacion superior -->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">Conocenos</a></li>
          <li><a href="#portfolio">Noticias</a></li>
          <li><a href="#team">Crew</a></li>
         
         <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          
          <li><div class="social-links">
              <a href="https://twitter.com/rausystem?lang=es"  target="_blank"><i class=" fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Rausystem-173642113498124/" target="_blank"><i class=" fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/rausystem.ccs/?hl=es-la" target="_blank"><i class=" fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCav1I7tqBt5kHrSG8oV9bsw" target="_blank"><i class=" fa fa-youtube"></i></a>
          </div></li>-->
            <li>

               <input type="text" name="user" class="form-control-login" id="user" placeholder="C.I o N&uacute;mero de Registro" required data-msg="Ingrese su numero de usuario"/>
           </li>
<li>
                    <input type="password" class="form-control-login" name="password" id="password" placeholder="Contraseña" required data-msg="Ingrese su Contraseña" />
    
             </li><li>
                    <div class="text-center">
                    <input class="text-center btn btn-lg btn-block form-control btn-get-started-login" type="submit" value="Ingresar" name="login">
                  </div>                   
          
          </li> 
        </ul>
      </nav>
      <!-- Cierro menu de navegacion superior -->

    </div></form>
  </header>