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


<!-- From Uiverse.io by m1her -->
<div class="radio-input">
    <label class="label">
        <input value="light_theme" name="value-radio" id="value-1" type="radio" />
        <span class="text">Light</span>
    </label>
    <label class="label">
        <input value="dark_theme" name="value-radio" id="value-1" type="radio" />
        <span class="text">Dark</span>
    </label>
    <label class="label">
        <input value="green_theme" name="value-radio" id="value-1" type="radio" />
        <span class="text">Green</span>
    </label>
</div>


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


<script>

    <?php if (isset($_COOKIE['theme'])) { ?>
                            document.body.className = '<?php echo "{$_COOKIE['theme']}" ?>'
    <?php } ?>


        const radioButtons = document.querySelectorAll('input[name="value-radio"]');
        radioButtons.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.checked) {
               let request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                }
                switch(this.value){
                    case "dark_theme":
                        request.open("GET", "dark.php", true);
                        request.send();
                location.reload();
                    break;
                    case "light_theme":
                        request.open("GET", "light.php", true);
                        request.send();
                location.reload();
                    break;
                    case "green_theme":
                        request.open("GET", "green.php", true);
                        request.send();
                location.reload();
                    break;
                }

            }
        });

    });


</script>

<?php require_once __DIR__ . '/footer.php' ?>