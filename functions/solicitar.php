<?php 

    session_start();
    include("../database/db_conection.php");
    $id_user=$_SESSION['id'];


    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $mensaje = $_POST['mensaje'];

    if ($_SESSION['tipo_usuario']=="1") {
        $id_artista= $_POST['id_usuario'];
        $select_ente="SELECT * FROM entes_culturales where usuarios_id_usuario='$id_user'";
        $run_select_ente=mysqli_query($dbcon,$select_ente);
        while($row_ente=mysqli_fetch_array($run_select_ente)){
            $id_ente=$row_ente['id_ente_cultural'];
        }
    }
    else{
         $id_ente=$_POST['id_usuario']; 
         $select_artista="SELECT *FROM artistas_urbanos where usuarios_id_usuario='$id_user'";
         $run_select_artista=mysqli_query($dbcon,$select_artista);
         while($row_artista=mysqli_fetch_array($run_select_artista)){
            $id_artista=$row_artista['id_artistas'];
        }
    }

    $insert_pauta="INSERT INTO pautas (entes_culturales_id_ente_cultural, artistas_urbanos_id_artistas, lugar, fecha, hora, mensaje) VALUES ('$id_ente','$id_artista','$lugar','$fecha','$hora','$mensaje')";
    $run_estudios=mysqli_query($dbcon,$insert_pauta);

?>