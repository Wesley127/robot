<?php 
include_once "classes.php";
@session_start();

$aron = new robot('Aron');
$bezem = new robot('Bezem');

$aron->report();
$bezem->report();

$_SESSION['aron'] = serialize($aron);
$_SESSION['bezem'] = serialize($bezem);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena</title>
    <script src="app.js"></script>
</head>
<body>

<div id="response"></div>
    
<button id="aron">Aron attack!</button>
<button id="bezem">Bezem attack!</button>
<button id="reset">reset</button>

</body>
</html>