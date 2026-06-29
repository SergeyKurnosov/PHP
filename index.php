    <meta charset="utf-8" />
<?php
$title = "Introduction to PHP";
$definition = "PHP - Hypertext Preprocessor";
define("PI", 3.14);
const EPSILON = 2.7;

const NOWSTRING = <<<'VINNY'
<pre>
Хорошо живет 
на свете 
ВИнни пух\n
Вот и сказочке конец.
</pre>
VINNY;

function type_info($type_name, $size, $min_value, $max_value)
{
    echo <<<INFO
<pre>
$type_name: 
size  - $size , 
Range - $min_value ... $max_value;
</pre>
INFO;
    //  echo "<pre>$type_name: size  - $size , Range - $min_value ... $max_value;</pre>";

    //echo '<pre>';
    //echo $type_name;
    //echo '. Size:';
    //echo $size;
    //echo 'Range:';
    //echo $min_value;
    //echo ' ... ';
    //echo $max_value;
    //echo '</pre>';
}

function dump_wrapper($value){
    echo '<pre>';
    var_dump($value);
    '</pre>';
}

?>
<!DOCTYPE html>

<head>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?= $title; //ccc,lcml ?></h1>
    <details>
        <summary>введение</summary>
    <h2><?= $definition; #lmwlmcwl ?></h2>
    <?php 3.144 ?>
    <p>Число  PI = <?= PI ?></p>
    <p>Epsilon  = <?= EPSILON; ?></p>
    </details>

    <details>
        <summary>типы данных</summary>
    <h2>Типы данных</h2>
    <pre>
        <?php
        var_dump($title);
        var_dump(PI);
        var_dump(EPSILON);
        ?>
    </pre>
    <?= NOWSTRING ?>
    <ol>
        <li>Скалярные типы</li>
        <ul>
            <li><code>bool</code></li>

            <li> <?php type_info('int', PHP_INT_SIZE, PHP_INT_MIN, PHP_INT_MAX) ?></li>

            <li><code>int: <?php echo PHP_INT_SIZE;
            echo 'Bytes';
            echo PHP_INT_MIN;
            echo '...';
            echo PHP_INT_MAX ?></code></li>
            <li><?php type_info('FLOAT', PHP_FLOAT_DIG, PHP_FLOAT_MIN, PHP_FLOAT_MAX) ?></li>
            <li><code>string</code></li>
            <ul>
                <li>'...' <?php echo 'Hello\nPHP!' ?></li>
                <li>"..."</li>
                <li><<< </li>
                <li>[<<< ]</li>
            </ul>
        </ul>
        <li>Составные типы</li>
        <ul>
            <li><code>array</code></li>
            <li><code>object</code></li>
            <li><code>callable</code></li>
            <li><code>iterable</code></li>
        </ul>
        <li>Специальные типы</li>
        <ul>
            <li><code>resource</code></li>
            <li><code>null</code></li>
        </ul>
    </ol>
    </details>


    <details open>
        <summary>Массивы</summary>
        <h3>индексированные массивы</h3>
        <?php 
        $arr = array(3,5,8,13,21);
      //  dump_wrapper($arr);

        $arr2 = [3, 5, 8, 13, 21, 34, 55];
       // dump_wrapper($arr2);

        echo '<pre>';
        for($i=0; $i < count($arr); $i++){
            echo "$arr[$i]\t";
        }
        echo "\n";
        $arr2[] = 89; // добавление элемента
        print_r($arr2);
        unset($arr2[3]); // удаление элемента
        print_r($arr2);
        echo '</pre>';
        ?>
        <h3>ассоциативнные массивы</h3>

        <?php
        $weekdays = 
            [
                'Sunday' => 0,
                'Moonday' => 1,
                'Tuesday' => 2,
                'Wednesday' => 3,
                'Thursday' => 4,
                'Friday' => 5,
                'Saturnday' => 6,
            ];

        //$weekdays['Sunday'] = 0;
        //$weekdays['Moonday'] = 1;
        //$weekdays['Tuesday'] = 2;
        //$weekdays['Wednesday'] = 3;
        //$weekdays['Thursday'] = 4;
        //$weekdays['Friday'] = 5;
        //$weekdays['Saturnday'] = 6;

        echo '<pre>';
        foreach($weekdays as $day => $key){
            echo "$key\t\t";  
        }
        echo "\n";
        print_r($weekdays);
        echo '</pre>';
        echo $weekdays['Wednesday'];
        ?>
    <h3>Многомерные массивы</h3>
        <?php
        $multi =
            [
            [0,1,1,2],
            [3,5,8,13,21],
            [34,55,89],
            [144,233,377,610,987]
            ];
        echo '<pre>';
        echo '<hr>';
        for($i=0; $i < count($multi);$i++){
            for ($j = 0; $j < count($multi[$i]); $j++) {
                echo $multi[$i][$j];
                echo "\t\t";
                //echo "$multi[$i][$j]\t\t";
            }
            echo "\n";
        }

        echo '<hr>';
        foreach($multi as $row){
            foreach ($row as $element) {
                echo "$element\t\t";
            }
            echo "\n";
        }

        echo '<hr>';
        print_r($multi);
        echo '</pre>';
        ?>
        
    </details>



</body>
</html>