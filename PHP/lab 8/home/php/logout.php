<?php
            setcookie("authenticated", "false" , time()-1,"/");
            session_start();
            session_destroy();
            header("Location:http://swe381-alobodi1826939.codeanyapp.com/home/"); 
            exit();

?>