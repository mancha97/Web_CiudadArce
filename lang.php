<?php 
    session_start();
    if(!isset($_SESSION['language'])){
        $_SESSION['language'] = 1;
    }
    if($_SESSION['language'] == 1){
        $_SESSION['language'] = 0;
        header("Refresh:0; url=index.php");
        exit;
    }else if($_SESSION['language'] == 0){
        $_SESSION['language'] = 1;
        header("Refresh:0; url=index.php");
        exit;
    }
    
?>