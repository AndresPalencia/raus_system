<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_user=$_POST['user'];
    $user_pass=$_POST['password'];

    $check_user="select * from usuarios WHERE (numero_unico_registro='$user_user' OR doc_ident='$user_user')   AND contrasena='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        $_SESSION['user']=$user_user;//here session is used and value of $user_email store in $_SESSION.

        while($row=mysqli_fetch_array($run))  {
            $tipo_usuario = $row['tipo_usuario'];
            $id =$row['id_usuario'];
            if ($tipo_usuario=="1") {
                $ente="select * from entes_culturales WHERE usuarios_id_usuario='$id' ";
                $run_ente=mysqli_query($dbcon,$ente);
                while($row_ente=mysqli_fetch_array($run_ente)){
                    $nombre_ente=$row_ente['nombre_ente'];
                    if ($nombre_ente=="") {
                        echo "<script>window.open('registrar_suscripcion_ente.php','_self')</script>";
                    }else{
                        echo "<script>window.open('raus.php','_self')</script>";

                    }
                }
            }
            if ($tipo_usuario=="2") {
                $artista="select * from artistas_urbanos WHERE usuarios_id_usuario='$id' ";
                $run_artista=mysqli_query($dbcon,$artista);
                while($row_artista=mysqli_fetch_array($run_artista)){
                    $resumen=$row_artista['resumen_artistico'];
                    if ($nombre_artista=="") {
                        echo "<script>window.open('registrar_suscripcion_artista.php','_self')</script>";
                    }else{
                        echo "<script>window.open('raus.php','_self')</script>";

                    }
                }
            }
        }




    }
    else
    {

        echo "<script>alert('Alguno de sus datos son incorrectos.')</script>";
        //  echo "<span>Alguno de sus datos son incorrectos.</span>";
        echo "<script>window.open('index.php','_self')</script>";



    }
}
?>