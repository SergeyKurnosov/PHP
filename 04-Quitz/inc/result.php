<?php

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';


$asked_questions = array_keys($_POST);
$user_answers = array_values($_POST);
$score = 0;
for($i=0; $i < count($user_answers);$i++){

  //  echo var_dump($user_answers[$i]);
  //  echo var_dump(strlen($user_answers[$i])-1);
    $answer = $user_answers[$i][strlen($user_answers[$i])-1];
    // $answer = explode('_', $user_answers[$i])[1];
    //echo $answer;
    //echo $user_answers[$i];
    if ($answer == $correct_answers[$i])
        $score++;


}
$score_message = "правильных ответов - {$score}.";
//$receipient = 'batumivice@yandex.ru';
//$receipient = 'kurnosov.kurnosow@yandex.ru';
$receipient = 'kurnosovsergej123@mail.ru';
//$sender = 'master@FReeBSD.academy';
$sender = 'client@PD411.academy';
//$sender = 'PHPtest@PD411.academy';
#$headers = "MINE-Version: 1.0\r\n";
#$headers .= "Content-type: text/html; charset=utf-8\r\n";
#$headers .= "To : {$receipient}\r\n";
$headers = "From: {$sender}\r\n";

echo '<div class="report">';
echo $score_message;
echo mail(
    $receipient,
    'Результаты тестирования',
    $score_message,
    $headers
    );

echo '</div>';

require_once __DIR__ . '/footer.php';
?>