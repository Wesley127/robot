<?php 

@session_start();

if (!empty($_SESSION)){
    include "classes.php";
}

$aron = unserialize($_SESSION['aron']);
$bezem = unserialize($_SESSION['bezem']);

if(isset($_POST['aron'])){
    echo $aron->attack($bezem);
    $_SESSION['aron'] = serialize($aron);
    $_SESSION['bezem'] = serialize($bezem);
}    

if(isset($_POST['bezem'])){
    echo $bezem->attack($aron);
    $_SESSION['aron'] = serialize($aron);
    $_SESSION['bezem'] = serialize($bezem);
}    

?>