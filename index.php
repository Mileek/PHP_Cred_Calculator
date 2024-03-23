<?php
require_once dirname(__FILE__) . '/config.php'; //zwróć ścieżkę pliku(wolałem sobie to zostawić) i sprawdź czy plik został już załadowny

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH . '/app/cred_calc.php'; //Teraz przenosimy się do kontrolera, nie do widoku!