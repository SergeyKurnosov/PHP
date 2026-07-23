<?php


require_once __DIR__ . '/point.php';
require_once __DIR__ . '/inheritance.php';

//$A = new Point(2,3);
//$A->info();
//$A->x = 7;
//$A->y = 8;
//echo $A;

$human = new Human("Vercetty","Tommy",30);
echo $human . '<br>';

//$t_student = new Student($human, "Theft", "Vice", 90, 99);

$student = new Student("Pinkamn", "Jessie", 20, "Chemistry", "WW_220", 90, 95);
echo $student . '<br>';

$graduate = new Graduate("Shreder", "Hank", 40, "Criminalistic", "OBN", 50, 70, "How to catch Hisenberg");
echo $graduate . '<br>';


?>