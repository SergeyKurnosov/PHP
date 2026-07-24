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

$student1 = new Student($human, "Theft1", "Vice", 91, 94);
$student2 = new Student($human, "Theft2", "Liberty", 92, 95);
$student3 = new Student($human, "Theft3", "SAN", 93, 96);

$group = [$student1, $student2, $student3];

foreach ($group as $student){
    
file_put_contents("log.txt", $student . "\n", FILE_APPEND);
    echo $student . " <br>";
}






?>