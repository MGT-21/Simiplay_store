<?php
session_start(); // Inicia a sessão

// Destrói todas as variáveis de sessão
$_SESSION = array(); // Limpa a sessão

// Destrói a sessão
session_destroy(); 

// Redireciona para a página de login
header("Location: index.php");
exit;
?>
