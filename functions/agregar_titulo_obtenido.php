
<?php
session_start();
$id_user=$_SESSION['id'];

include ("../database/db_conection.php");

if(isset($_POST['form_titulos'])){

    $titulo=$_POST['titulo'];
    $institucion=$_POST['institucion'];
    $anio=$_POST['anio'];
  
    $select_artista="select * from artistas_urbanos where usuarios_id_usuario='$id_user'";

    $run_select=mysqli_query($dbcon,$select_artista);
    while($row_artista=mysqli_fetch_array($run_select)){
        $id_artista=$row_artista['id_artistas'];
        $insert_titulo="insert into artistas_titulos_obtenidos (titulo, institucion, anio, artistas_urbanos_id_artistas) values 
  ('$titulo','$institucion','$anio','$id_artista')" or die($insert_titulo);
        $run_titulo=mysqli_query($dbcon,$insert_titulo);
        echo "<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";


    }


}

?>