<?php
    define('HOUR', 3600);
    $visitor = false;
    if (isset($_COOKIE['return'])) {
        $visitor = true;
    } else {
        setcookie('return', '1', time() + 300);
    }
echo '<h1>У этой страницы обязательна кодировка \'Unicode(UTF-8without signature)-Codepage65001)\'</h1>';
    echo $visitor ? 'Welcome back' : 'Hello';
    
    ?>
