<?php


require_once __DIR__ . '/point.php';

$A = new Point(2,3);
$A->info();
$A->x = 7;
$A->y = 8;
echo $A;

?>