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
        echo "<script>window.open('raus.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>