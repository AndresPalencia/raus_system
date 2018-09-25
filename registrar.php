<?php
include("database/db_conection.php");

if(isset($_POST['registro']))
{
    $user_name=$_POST['name'];
    $user_lastname=$_POST['lastname'];
    $user_id_doc=$_POST['id_doc'];
    $user_numero_registro="00000001";
    $user_pass=$_POST['pass'];
    $user_address=$_POST['address'];
    $user_phone=$_POST['phone'];
    $user_email=$_POST['email'];  
    $user_cbx_parroquia=$_POST['cbx_parroquia'];
    $user_tipo=$_POST['cbx_tipo_user'];



    $check_email_query="select * from usuarios WHERE correo='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email ya se encuentra en uso por otro usuario!')</script>";
exit();
    }
    $insert_user="insert into usuarios (nombres,apellidos,doc_ident,numero_unico_registro,contrasena,telefono,correo,direccion,parroquias_id_parroquia,tipo_usuario) VALUES ('$user_name','$user_lastname','$user_id_doc','$user_numero_registro','$user_pass','$user_phone','$user_email','$user_address','$user_cbx_parroquia','$user_tipo')";
    
    $resultado=mysqli_query($dbcon,$insert_user) or die($insert_user);

   if($resultado)
    {
        
        echo"<script>window.open('registrar_suscripcion.php','_self')</script>";
        echo "<script>alert('Usuario registrado exitosamente!')</script>";

        $user_id_insert=mysqli_insert_id($dbcon);
        $resumen_artistico="";

        $insertArt="insert into artistas_urbanos (nombre,apellido,resumen_artistico,usuarios_id_usuario) VALUES
        ('$user_name','$user_lastname','$resumen_artistico','$user_id_insert')";
        mysqli_query($dbcon,$insertArt) or die ($insertArt);

    }else{
      echo "<script>alert('Error al guardar Usuario!')</script>";
    }

}

?>