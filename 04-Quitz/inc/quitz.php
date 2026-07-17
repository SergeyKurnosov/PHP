<?php

require_once __DIR__ . "/header.php";
try {
    //  echo "Привет {$_POST['first_name']} {$_POST['last_name']}, приятного прохождения ";
    echo "Привет {$first_name} {$last_name}, приятного прохождения ";
} catch (Exception $e) {

}
echo '<pre>';
print_r(ROOT . "\n");
echo $_SERVER['DOCUMENT_ROOT'];
echo '</pre>';


?>

    <button id="prev"><<</button>
<button id="next">>></button>
<form method="POST" class="form-quitz" action="result.php">
    <div class="quitz-content">
        <?php for ($i = 0; $i < count($questions); $i++): ?>
                  <div class="question">
                      <h3><?= $questions[$i] ?></h3>
                      <?php for ($j = 0; $j < count($answers[$i]); $j++): ?>
                                              <input type="radio" name="<?= $questions[$i] ?>" id="<?= "{$i}_{$j}" ?>" value="<?= "{$i}_{$j}" ?>" />
                                              <label for="<?= "{$i}_{$j}" ?>"><?= $answers[$i][$j] ?></label>;<br />
                      <?php endfor ?>
                  </div>

        <?php endfor ?>

    </div>
    <div class="quitz-item">
        <input type="submit" value="Отправить" />

    </div>
</form>

<?php
$a = " ";
?>
    <script>
        let current = 0;
        const answers = document.querySelectorAll(".question");

        function ShowAnswer(i) {
            answers.forEach(a => a.style.display = "none");
            answers[i].style.display = "block";
        }

        document.getElementById("next").addEventListener("click", () => {
             if (current < answers.length - 1) {
             current++;
             ShowAnswer(current);
             }
        });

                document.getElementById("prev").addEventListener("click", () => {
             if (current >0) {
             current--;
             ShowAnswer(current);
             }
        } );

        ShowAnswer(current);


    </script>
<?php
echo " ";
?>


<?php require_once __DIR__ . '/footer.php' ?>



