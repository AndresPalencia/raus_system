  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">RAUS</a></h1>
       </div>
    <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li><a href="misdatos.php"><span class="fa fa-user"></span> <?php echo $_SESSION['numero_unico_registro']; ?></a></li>
            <li><a href="logout.php" class="logout">  <span class="fa fa-sign-out"></span> Cerrar Sesion</a></li>
        </ul>
      </nav>
  

  </div>
  </header>