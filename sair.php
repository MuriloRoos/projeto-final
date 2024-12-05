<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: formulario-de-login-html-css/login.html")
?>