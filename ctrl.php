<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

switch ($action) {
    default: // 'CredCalcCtrl'
        include 'check.php';
        $ctrl = new app\controllers\CredCalcCtrl();
        $ctrl->generateView();
        break;
    case 'login': // 'LoginCtrl'
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogin();
    case 'calcCompute':
        include 'check.php';
        // załaduj definicję kontrolera
        $ctrl = new app\controllers\CredCalcCtrl();
        $ctrl->process();
        break;
    case 'logout':
        include 'check.php';
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->doLogout();
        break;
    case 'action2':
        // zrób coś innego ...
        break;
}
