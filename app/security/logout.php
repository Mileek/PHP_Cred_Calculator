<?php
require_once dirname(__FILE__).'/../../config.php';

// 1. zakończenie sesji
session_start(); //Nawiąż sesję
session_destroy(); //Zniszcz tą właśnie wcześniej nawiązaną sesję

// 2. przekieruj lub "forward" na stronę główną
//redirect
header("Location: "._APP_URL);
//"forward"
//include _ROOT_PATH.'/index.php';