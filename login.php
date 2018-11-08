<?php

include("database/db_conection.php");
$user_user=$_POST['user'];
$user_pass=$_POST['password'];
$check_user="SELECT * from usuarios WHERE (numero_unico_registro='$user_user' OR doc_ident='$user_user')";
$run=mysqli_query($dbcon,$check_user);

if(mysqli_num_rows($run))
{
    session_start();
    $_SESSION['user']=$user_user;
    $_SESSION['tiempo']=time();

    while($row=mysqli_fetch_array($run))  {
        if (password_verify($user_pass,$row['contrasena'])== true) {
            $tipo_usuario = $row['tipo_usuario'];
            $id =$row['id_usuario'];
            $_SESSION['id']=$id;
            $_SESSION['doc_ident'] = $row['doc_ident'];
            $_SESSION['numero_unico_registro'] = $row['numero_unico_registro'];
            if ($tipo_usuario=="1") {
                $_SESSION['tipo_usuario']='1';
                $ente="SELECT * FROM entes_culturales WHERE usuarios_id_usuario='$id' ";
                $run_ente=mysqli_query($dbcon,$ente);
                while($row_ente=mysqli_fetch_array($run_ente)){
                    $nombre_ente=$row_ente['nombre_ente'];
                    if ($nombre_ente=="") {
                        echo "ente_suscripcion";
                        $_SESSION['licencia'] = 0;
                    }else{
                        echo "ente";
                        $_SESSION['licencia'] = 1;
                    }
                }
            }
            if ($tipo_usuario=="2") {
                $_SESSION['tipo_usuario']='2';
                $artista="select * FROM artistas_urbanos WHERE usuarios_id_usuario='$id' ";
                $run_artista=mysqli_query($dbcon,$artista);
                while($row_artista=mysqli_fetch_array($run_artista)){
                    $resumen=$row_artista['resumen_artistico'];
                    if ($resumen=="") {
                        echo "artista_suscripcion";
                        $_SESSION['licencia'] = 0;
                    }else{
                        echo "artista";
                        $_SESSION['licencia'] = 1;
                    }
                }
            }
        }
    }
}
?>