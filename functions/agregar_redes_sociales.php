<?php
session_start();
$id_user=$_SESSION['id'];

include ("../database/db_conection.php");
if(isset($_POST['form_red_soc'])){

    $select_usuario="select * from usuarios where usuarios.id_usuario='$id_user'";
    $run_user=mysqli_query($dbcon,$select_usuario);
    while($row=mysqli_fetch_array($run_user)) {
        $tipo_usuario = $row['tipo_usuario'];

        $redes_sociales = $_POST['redes_sociales'];
        $url = $_POST['url'];
        if ($tipo_usuario=="1"){
           $select_ente = "select * from entes_culturales where usuarios_id_usuario='$id_user'";
            $run_select = mysqli_query($dbcon, $select_ente);
            while ($row_ente = mysqli_fetch_array($run_select)) {
                $id_ente = $row_ente['id_ente_cultural'];
                $insert_red_soc = "insert into entes_redes_sociales (url_red_social, entes_culturales_id_ente_cultural, redes_sociales_id_redes_sociales ) values 
  ('$url','$id_ente','$redes_sociales')" or die($insert_red_soc);
                $run_red_soc = mysqli_query($dbcon, $insert_red_soc);
                echo "<script>window.open('../registrar_suscripcion_ente.php','_self')</script>";


            }

        }else{
            $select_artista = "select * from artistas_urbanos where usuarios_id_usuario='$id_user'";
            $run_select = mysqli_query($dbcon, $select_artista);
            while ($row_artista = mysqli_fetch_array($run_select)) {
                $id_artista = $row_artista['id_artistas'];
                $insert_red_soc = "insert into artistas_redes_sociales (url_red_social, artistas_urbanos_id_artistas, redes_sociales_id_redes_sociales ) values 
  ('$url','$id_artista','$redes_sociales')" or die($insert_red_soc);
                $run_red_soc = mysqli_query($dbcon, $insert_red_soc);
                echo "<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";


            }
        }



    }
}

?>