<?php
include("../database/db_conection.php");

$user=$_POST['user'];
$user_pass=$_POST['pass'];
$user_pregunta=$_POST['pregunta'];
$user_respuesta=$_POST['respuesta'];
$contra_vali=$_POST['contra_vali'];

$user_pass=password_hash($user_pass, PASSWORD_DEFAULT);

$check_user="SELECT * from usuarios WHERE (numero_unico_registro='$user' OR doc_ident='$user')";
$run=mysqli_query($dbcon,$check_user);

if(!mysqli_num_rows($run))
{
    echo "usuario_incorrecto";
    exit();
}else{
    while($row_user=mysqli_fetch_array($run)){
        $id_user=$row_user['id_usuario'];
        $pregunta_consulta=$row_user['pregunta_seguridad'];
        $respuesta_consulta=$row_user['respuesta_seguridad'];
        if ($user_pregunta=="") {
            echo "pregunta";
            exit();
        }
        if ($user_respuesta=="") {
            echo "respuesta";
            exit();
        }
        if ($user_pregunta==$pregunta_consulta && $user_respuesta==$respuesta_consulta) {
            
            if ($contra_vali=="0") {
                echo "pregunta_correcta";
                exit();
            }
            
        }else{
            echo "pregunta_incorrecta";
            exit();
        }
    } 

}if ($contra_vali=="1") {  echo "done";
    $update_contra="UPDATE usuarios set contrasena='$user_pass' WHERE id_usuario='$id_user'";
    $resultado=mysqli_query($dbcon,$update_contra) or die ($update_contra); 
  
}


 
?>
