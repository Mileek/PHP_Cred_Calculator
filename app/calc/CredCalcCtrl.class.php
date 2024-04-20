<?php

//załaduj Smarty
require $conf->root_path . '/vendor/autoload.php';
use Smarty\Smarty;

require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/calc/CredCalcForm.class.php';
require_once $conf->root_path . '/app/calc/CredCalcResult.class.php';


class CredCalcCtrl
{
    // W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
// include _ROOT_PATH . '/app/security/check.php';

    //definicja zmiennych kontrolera
    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    public function __construct()
    {
        $this->msgs = new Messages();
        $this->form = new CredCalcForm();
        $this->result = new CredCalcResult();
    }

    // 1. pobranie parametrów
    function getParams()
    {
        $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
        $this->form->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
    }

    // 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
    function validate()
    {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->amount) && isset($this->form->years) && isset($this->form->interest))) {
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }
        if ($this->form->interest == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if (!$this->msgs->isError()) {

            // sprawdzenie, czy $amount i $years i $interest są liczbami całkowitymi
            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota kredytu nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->years)) {
                $this->msgs->addError('Liczba lat nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->interest)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
            }
        }

        return !$this->msgs->isError();
    }

    // 3. wykonaj zadanie jeśli wszystko w porządku
    function process()
    {
        //global $role;
        // if ($role == 'admin'){}
        //pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
        $this->getParams();

        if ($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->interest = floatval($this->form->interest);

            //wykonanie operacji
            $monthly_interest = ($this->form->interest / 12) / 100; //  Oblicza miesięczne oprocentowanie dzieląc roczne oprocentowanie przez 12 miesięcy i 100
            $number_of_payments = $this->form->years * 12; // Oblicza całkowitą liczbę płatności przeliczając lata na miesiące

            $this->result->result = $this->form->amount * ($monthly_interest / (1 - pow((1 + $monthly_interest), -$number_of_payments))); // Wzór na równowartość raty kredytu
            $this->result->fullResult = $this->result->result * $number_of_payments; // Cała kwota do zapłaty
        }
        $this->generateView();
    }

    // 4. Przygotowanie danych dla szablonu
    public function generateView()
    {
        $smarty = new Smarty();

        global $conf;
        $smarty->assign('conf', $conf);

        $smarty->assign('app_url', $conf->app_url);
        $smarty->assign('root_path', $conf->root_path);
        $smarty->assign('page_title', 'Przykład php 04');
        $smarty->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        $smarty->assign('page_header', 'Szablony Smarty');

        //pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
        $smarty->assign('form', $this->form);
        $smarty->assign('result', $this->result);
        $smarty->assign('messages', $this->msgs);

        // 5. Wywołanie szablonu
        $smarty->display($conf->root_path . '/app/calc/cred_calc.tpl');
    }
}