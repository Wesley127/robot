<?php

if(isset($_POST['reset'])){
    session_start();
    session_destroy();
   echo "success";
}  

?>