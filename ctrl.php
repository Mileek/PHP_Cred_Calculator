<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

switch ($action) {
    default: // 'CredCalcCtrl'
        $ctrl = new app\controllers\CredCalcCtrl();
        $ctrl->generateView();
        break;
    case 'calcCompute':
        // załaduj definicję kontrolera
        $ctrl = new app\controllers\CredCalcCtrl();
        $ctrl->process();
        break;
    case 'action1':
        // zrób coś innego ...
        break;
    case 'action2':
        // zrób coś innego ...
        break;
}
