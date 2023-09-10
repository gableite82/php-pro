<?php 
    
    require '../vendor/autoload.php';
    require '../app/helpers/constatnte.php';

    session_start();

    Router::run();

    // echo TESTE;

   
?>