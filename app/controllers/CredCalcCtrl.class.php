<?php
//namespace obecnej klassy
namespace app\controllers;

//Importy klas
use app\forms\CredCalcForm;
use app\transfer\CredCalcResult;

class CredCalcCtrl
{
    //definicja zmiennych kontrolera
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    public function __construct()
    {
        $this->form = new CredCalcForm();
        $this->result = new CredCalcResult();
    }

    // 1. pobranie parametrów
    function getParams()
    {
        $this->form->amount = getFromRequest('amount');
        $this->form->years = getFromRequest('years');
        $this->form->interest = getFromRequest('interest');
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
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->interest == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {

            // sprawdzenie, czy $amount i $years i $interest są liczbami całkowitymi
            if (!is_numeric($this->form->amount)) {
                getMessages()->addError('Kwota kredytu nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->years)) {
                getMessages()->addError('Liczba lat nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->interest)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą');
            }
        }

        return !getMessages()->isError();
    }

    // 3. wykonaj zadanie jeśli wszystko w porządku
    function process()
    {
        //global $role;
        // if ($role == 'admin'){}
        //pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
        $this->getParams();

        //inRole('admin'); //sprawdzenie czy jest adminem, ale nie wiem do czego bym mógł to użyć :D
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


    public function action_calcShow()
    {
        getMessages()->addInfo('Witaj w kalkulatorze kredytowym');
        $this->generateView();
    }

    // 4. Przygotowanie danych dla szablonu
    public function generateView()
    {
        getSmarty()->assign('page_title', 'Przykład php 04');
        getSmarty()->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
        getSmarty()->assign('page_header', 'Szablony Smarty');

        //pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);

        // 5. Wywołanie szablonu
        getSmarty()->display('cred_calc.tpl');
    }
}