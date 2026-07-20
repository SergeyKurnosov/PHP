<?php
    define('HOUR', 3600);
    $visitor = false;
    if (isset($_COOKIE['return'])) {
        $visitor = true;
    } else {
        setcookie('return', '1', time() + 300);
    }

    
    ?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Cookies </title>
</head>
<body>
        <h1>Cookies </h1> 
    <h1>У этой страницы обязательна кодировка <br>Unicode(UTF-8without signature)-Codepage65001)</h1>

    <h2>

     <?= $visitor ? 'Welcome back' : 'Hello';?>

    </h2>
      




</body>
</html>
