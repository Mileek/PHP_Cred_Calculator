<?php
//namespace obecnej klassy
namespace app\controllers;

class HistoryCtrl
{
    public function action_historyShow()
    {
        getMessages()->addInfo('Witaj w kalkulatorze kredytowym');
        $this->generateView();
    }

    public function generateView()
    {
        getSmarty()->assign('page_title', 'Historia');
        getSmarty()->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        getSmarty()->assign('page_header', 'Historia');

        // Pobierz dane z bazy danych i przypisz je do Smarty
        $database = new \Medoo\Medoo(
            [
                'type' => 'mysql',
                'host' => 'localhost',
                'database' => 'kalk',
                'username' => 'root',
                'password' => '',

                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                'port' => 3306,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                ],
            ]
        );


        // Pobierz dane z bazy danych
        $data = $database->select("wynik", "*");

        getSmarty()->assign('data', $data);
        // Wywołanie szablonu
        getSmarty()->display('historia.tpl');
    }
}