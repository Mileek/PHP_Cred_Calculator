<?php
require_once dirname(__FILE__) . '/config.php'; //zwróć ścieżkę pliku(wolałem sobie to zostawić) i sprawdź czy plik został już załadowny

//przekazanie żądania do następnego dokumentu ("forward")
// include _ROOT_PATH . '/app/calc_view.php';
include _ROOT_PATH . '/app/cred_calc_view.php';