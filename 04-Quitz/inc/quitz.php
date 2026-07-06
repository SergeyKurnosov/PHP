<?php

require_once __DIR__ . "/header.php";
    try{
  //  echo "Привет {$_POST['first_name']} {$_POST['last_name']}, приятного прохождения ";
    echo "Привет {$first_name} {$last_name}, приятного прохождения ";
    }catch(Exception $e){

    }
echo '<pre>';
print_r(ROOT . "\n");
echo $_SERVER['DOCUMENT_ROOT'];
echo '</pre>';


?>

<form method="POST">
    <div class="quitz-content">
        <?php for ($i = 0; $i < count($questions); $i++): ?>
            <div class="question">
                <h3><?= $questions[$i] ?></h3>
                <?php for ($j = 0; $j < count($answers[$i]); $j++): ?>
                    <input type="radio" name="<?= $i ?>" id="<?= "{$i}_{$j}" ?>" value="<?= "{$i}_{$j}" ?>" />
                    <label for="<?= "{$i}_{$j}" ?>"><?= $answers[$i][$j] ?></label>;<br />
                <?php endfor ?>
            </div>

        <?php endfor ?>



        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['btn'])) {
                $selected = [];
                for ($i = 0; $i < count($questions); $i++) {
                    if (isset($_POST[$i])) {
                        $string = (string) $_POST[$i];
                        preg_match_all('/\d+/', $string, $matches);
                        $selected[$i] = $matches[0][1];
                    } else {
                        $selected[$questions[$i]] = NULL;
                    }
                }
                if (count($selected) > 0) {
                    $correct = 0;
                    $incorrect = 0;
                    for ($i = 0; $i < count($correct_answers); $i++) {
                        if ($selected[$i] != NULL &&  (int) $correct_answers[$i] === (int) $selected[$i]) {
                            $correct++;
                        } else {
                            $incorrect++;
                        }
                    }
                    print_r("Правильно - $correct ; \n");
                    print_r("Неправильно - $incorrect ; \n");
                }
            }
        }
        ?>
    </div>
    <div class="quitz-item">
        <!-- From Uiverse.io by cssbuttons-io -->
        <button type="submit" name="btn">
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"> Проверить
            </span>
        </button>

    </div>
</form>

<?php require_once __DIR__ . '/footer.php' ?>