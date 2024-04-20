<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';

require_once $conf->root_path . '/app/CredCalcCtrl.class.php'; //załaduj plik CredCalcCtrl.class.php

//utwórz obiekt i użyj
$ctrl = new CredCalcCtrl();
$ctrl->process();
