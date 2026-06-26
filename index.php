    <meta charset="utf-8" />
<?php
$title = "Introduction to PHP" ;
$definition = "PHP - Hypertext Preprocessor" ;
define("PI", 3.14);
const EPSILON =2.7;
?>
<!DOCTYPE html>

<head>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?= $title; //ccc,lcml ?></h1>
    <h2><?= $definition; #lmwlmcwl?></h2>
    <?php 3.144?>
    <p>Число  PI = <?= PI?></p>
    <p>Epsilon  = <?= EPSILON;?></p>
    <h2>Типы данных</h2>
  <!--  <?= die("Прерывает выполнение кода") ?> --> 
    <pre>
        <?php
        var_dump($title);
        var_dump(PI);
        var_dump(EPSILON);
        ?>
    </pre>


</body>
</html>