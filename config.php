<?php
require_once 'core/Config.class.php';

$conf = new Config();

$conf->server_name = 'localhost';
$conf->server_url = 'http://' . $conf->server_name;
$conf->app_root = '/php_06_nowa_struktura/PHP_Studies';
$conf->action_root = $conf->app_root . '/ctrl.php?action=';

$conf->app_url = $conf->server_url . $conf->app_root;
$conf->action_url = $conf->server_url . $conf->action_root;
$conf->root_path = dirname(__FILE__);
