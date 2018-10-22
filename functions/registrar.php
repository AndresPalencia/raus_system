<?php
include("../database/db_conection.php");

$user_name=$_POST['name'];
$user_lastname=$_POST['lastname'];
$user_id_doc=$_POST['id_doc'];
$user_pre_id=$_POST['pre_id_doc'];
$user_pass=$_POST['pass'];
$user_address=$_POST['address'];
$user_phone=$_POST['phone'];
$user_cod_area=$_POST['cod_tel'];
$user_email=$_POST['email'];
$user_cbx_parroquia=$_POST['cbx_parroquia'];
$user_tipo=$_POST['cbx_tipo_user'];
$user_pass=password_hash($user_pass, PASSWORD_DEFAULT);

$check_doc_query="SELECT * FROM usuarios WHERE doc_ident='$user_id_doc'";
$run_query_doc=mysqli_query($dbcon,$check_doc_query);

if(mysqli_num_rows($run_query_doc)>0)
{
    echo "doc_repetido";
    exit();
}
$check_email_query="SELECT * FROM usuarios WHERE correo='$user_email'";
$run_query_email=mysqli_query($dbcon,$check_email_query);


if(mysqli_num_rows($run_query_email)>0)
{
    echo "email_repetido";
    exit();
}

if($_POST['name']!=='' && $user_lastname!=='' && $user_id_doc!=='' && $user_pass!=='' && $user_address!=='' && $user_phone!=='' && $user_email!=='' && $user_cbx_parroquia!=='' && $user_tipo!=='' && filter_var($user_email, FILTER_VALIDATE_EMAIL) ){


    $insert_user="INSERT into usuarios (nombres,apellidos,doc_ident,contrasena,telefono,correo,direccion,parroquias_id_parroquia,tipo_usuario,codigo_area,pre_ci) VALUES ('$user_name','$user_lastname','$user_id_doc','$user_pass','$user_phone','$user_email','$user_address','$user_cbx_parroquia','$user_tipo','$user_cod_area','$user_pre_id')";

    $resultado=mysqli_query($dbcon,$insert_user) or die ($insert_user); //$insert_user
    $user_id_insert=mysqli_insert_id($dbcon);

    // die($user_tipo);
    if($resultado){
        if ($user_tipo=="2"){
            $resumen_artistico="";
            $insertArt="INSERT into artistas_urbanos (resumen_artistico,usuarios_id_usuario) VALUES
                ('$resumen_artistico','$user_id_insert')";
            mysqli_query($dbcon,$insertArt) or die ($insertArt);
            session_start();
            $user_numero_registro="A".str_pad($user_id_insert, 5, '0', STR_PAD_LEFT);
            $_SESSION['id']=$user_id_insert;
            $update_art="UPDATE usuarios SET numero_unico_registro='$user_numero_registro' WHERE id_usuario='$user_id_insert'";
            $run_query=mysqli_query($dbcon,$update_art) or die ($update_art);
            $_SESSION['numero_unico_registro']=$user_numero_registro;
            echo "artista_suscripcion";
        }
        else if ($user_tipo=="1"){
            $insertEnte="INSERT into entes_culturales (usuarios_id_usuario) VALUES ('$user_id_insert')";
            mysqli_query($dbcon,$insertEnte) or die ($insertEnte);
            session_start();
            $user_numero_registro="E".str_pad($user_id_insert, 5, '0', STR_PAD_LEFT);
            $_SESSION['id']=$user_id_insert;
            $update_ent="UPDATE usuarios SET numero_unico_registro='$user_numero_registro' WHERE id_usuario='$user_id_insert'";
            $run_query_ent=mysqli_query($dbcon,$update_ent) or die ($update_ent);
            $_SESSION['numero_unico_registro']=$user_numero_registro;
            echo "ente_suscripcion";
        }
    }else{
        echo "error";
    }
}





?>
