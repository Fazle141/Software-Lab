<?php
        if(!isset($_SESSION))
        {
            session_start();
        }
    session_destroy();
    redirect("http://localhost/a/login.php");
    function redirect($url){
        if (headers_sent()){
          die('<script type="text/javascript">window.location=\''.$url.'\';</script‌​>');
        }else{
          header('Location: ' . $url);
          die();
        }    
    }
?>