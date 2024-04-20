<?php
require_once dirname(__FILE__) . '/config.php'; //zwróć ścieżkę pliku(wolałem sobie to zostawić) i sprawdź czy plik został już załadowny

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");


include $conf->root_path . '/app/cred_calc.php'; //załaduj plik cred_calc.php