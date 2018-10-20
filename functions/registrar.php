<?php
include("../database/db_conection.php");

if(isset($_POST['registro']))
{
    $user_name=$_POST['name'];
    $user_lastname=$_POST['lastname'];
    $user_id_doc=$_POST['id_doc'];
    $user_pre_id=$_POST['pre_id_doc'];
    $user_numero_registro="00000001";
    $user_pass=$_POST['pass'];
    $user_address=$_POST['address'];
    $user_phone=$_POST['phone'];
    $user_cod_area=$_POST['cod_tel'];
    $user_email=$_POST['email'];  
    $user_cbx_parroquia=$_POST['cbx_parroquia'];
    $user_tipo=$_POST['cbx_tipo_user'];
    $check_email_query="select * from usuarios WHERE correo='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    $user_pass=password_hash($user_pass, PASSWORD_DEFAULT);
    if(mysqli_num_rows($run_query)>0)
    {
        echo "<script> alert('Email $user_email ya se encuentra en uso por otro usuario!')</script>";
        exit();
    }
    $insert_user="insert into usuarios (nombres,apellidos,doc_ident,numero_unico_registro,contrasena,telefono,correo,direccion,parroquias_id_parroquia,tipo_usuario,codigo_area,pre_ci) VALUES ('$user_name','$user_lastname','$user_id_doc','$user_numero_registro','$user_pass','$user_phone','$user_email','$user_address','$user_cbx_parroquia','$user_tipo','$user_pre_id','$user_cod_area')";
    
    $resultado=mysqli_query($dbcon,$insert_user) or die (header("Location: ../index.php")); //$insert_user
    $user_id_insert=mysqli_insert_id($dbcon);
   // die($user_tipo);
    if($resultado){
        if ($user_tipo=="2"){
    $resumen_artistico="";
            $insertArt="insert into artistas_urbanos (resumen_artistico,usuarios_id_usuario) VALUES
            ('$resumen_artistico','$user_id_insert')";
            mysqli_query($dbcon,$insertArt) or die (header("Location: ../index.php"));
            session_start();

            $_SESSION['id']=$user_id_insert;
            echo"<script>window.open('../registrar_suscripcion_artista.php','_self')</script>";
        } 
        else if ($user_tipo=="1"){
             $insert_ente="insert into entes_culturales (usuarios_id_usuario) VALUES ('$user_id_insert')";
            mysqli_query($dbcon,$insert_ente) or die (header("Location: ../index.php"));
            session_start();

            $_SESSION['id']=$user_id_insert;
            echo"<script>window.open('../registrar_suscripcion_ente.php?user=$user_id_insert','_self')</script>";
        }
    }else{
        echo "<script>alert('Error al guardar Usuario!')</script>";
    }

}

?>