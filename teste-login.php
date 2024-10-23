<?php
    session_start();

   

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        //acessa
        include_once('config.php');
        //$email = $_POS['email'];
        //$password = $_POST['password'];
        print_r($_REQUEST);
        
    }
    else
    {
        //Nao acessa
        header('Location: login.php');
    }