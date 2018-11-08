<?php
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 120) {
    echo "<script>alert('Su cuenta ha sido cerrada automaticamente ya que ha transcurrido el tiempo limite de inactividad');</script>";
    
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
    die();  
} $_SESSION['tiempo']=time();
?>