<?php 
    session_start();
    $_SESSION['Active'] = false;
    header('location:index.php');
?>