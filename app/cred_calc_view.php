<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
</head>

<body style="background: #808080">

    <div style="width:90%; margin: 2em auto;">
        <!--                <a href="<?php print (_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>-->
        <a href="<?php print (_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    </div>

    <div style="width:90%; margin: 2em auto;">

        <form style="padding: 6px; border: 2px solid #000; background: #A9A9A9;" class="pure-form pure-form-stacked"
            action="<?php print (_APP_URL); ?>/app/cred_calc.php" method="post">
            <legend>Kalkulator Kredytowy</legend>
            <fieldset>
                <label for="id_amount">Kwota kredytu: </label>
                <input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" /><br />
                <label for="id_years">Ilość lat: </label>
                <input id="id_years" type="text" name="years" value="<?php out($years) ?>" /><br />
                <label for="id_interest">Oprocentowanie [%]: </label>
                <input id="id_interest" type="text" name="interest" value="<?php out($interest) ?>" /><br />
            </fieldset>
            <input class="pure-button pure-button-primary" type="submit" value="Oblicz" />
        </form>

        <?php
        //wyświeltenie listy błędów, jeśli istnieją
        if (isset ($messages)) {
            if (count($messages) > 0) {
                echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 15px; background-color: #f88; width:300px;">';
                foreach ($messages as $msg) {
                    echo '<li>' . $msg . '</li>'; //Konkatynacja następuje po kropce! np $msg.$key
                }
                echo '</ol>';
            }
        }
        ?>

        <?php if (isset ($result) && isset ($fullResult)) { ?>
            <div style="margin: 20px; padding: 10px; border-radius: 25px; background-color: #add8e6; width:300px;">
                <?php echo 'Rata kredytu: ' . $result; ?><br />
                <?php echo 'Całą kwota do zapłaty: ' . $fullResult; ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>