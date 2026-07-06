<?php
$title = 'Quitz PD_411';
const ROOT = __DIR__ . '\\..';

$questions =
    [
        'Кто создал игру Max Payne?',
        'На каком движке создана игра Crysis 2?',
        'Как зовут главного персонажа Vice City?',
        'В каком году вышла GTA5?',
        'На каком движке разработана GTA5?'
    ];

$answers =
    [
        ['Bethesda', 'Crytek', 'Rockstar', 'Remady'],
        ['CryEngine3', 'Crytek', 'Cryengine5', 'Rage'],
        ['Max Payne', 'Tommy Vercetty', 'Ricardo Diaz'],
        ['2003', '2012', '2013', '2015'],
        ['CryEngine3', 'Crytek', 'Cryengine5', 'Rage'],
       
    ];

$correct_answers =
    [
    3,
    0,
    1,
    2,
    3
    ];



$first_name = "first_name";
$last_name = "last_name";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn_log'])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
    }
}
?>
