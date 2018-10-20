<?php 
	session_start();
	if (!isset($_SESSION['id']) AND !isset($_SESSION['doc_ident'])) {
		header("Location: index.php");
		die();
	}else{

	}
?>