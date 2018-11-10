<?php
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 15) {
    
    
    $_SESSION = array();
    session_destroy();
    echo "<script>alert('Su cuenta ha sido cerrada automaticamente ya que ha transcurrido el tiempo limite de inactividad')</script>"; header("Location: index.php");
    die();  
} $_SESSION['tiempo']=time();
?>