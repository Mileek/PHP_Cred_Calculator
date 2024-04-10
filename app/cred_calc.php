<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';
//załaduj Smarty
require _ROOT_PATH . '/vendor/autoload.php';
use Smarty\Smarty;

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.
//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
// include _ROOT_PATH . '/app/security/check.php';

// 1. pobranie parametrów
function getParams(&$amount, &$years, &$interest)
{
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$amount, &$years, &$interest, &$messages, &$hide_intro)
{
    // sprawdzenie, czy parametry zostały przekazane
    if (!(isset($amount) && isset($years) && isset($interest))) {
        return false;
    }

    $hide_intro = true;

    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ($amount == "") {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if ($years == "") {
        $messages[] = 'Nie podano liczby lat';
    }
    if ($interest == "") {
        $messages[] = 'Nie podano oprocentowania';
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count($messages) != 0)
        return false;

    // sprawdzenie, czy $amount i $years i $interest są liczbami całkowitymi
    if (!is_numeric($amount)) {
        $messages[] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (!is_numeric($years)) {
        $messages[] = 'Liczba lat nie jest liczbą całkowitą';
    }

    if (!is_numeric($interest)) {
        $messages[] = 'Oprocentowanie nie jest liczbą';
    }

    if (count($messages) != 0)
        return false;
    else
        return true;
}

// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$amount, &$years, &$interest, &$messages, &$result, &$fullResult)
{
    global $role;

    // if ($role == 'admin'){}
    $amount = intval($amount);
    $years = intval($years);
    $interest = floatval($interest);

    //wykonanie operacji
    $monthly_interest = ($interest / 12) / 100; //  Oblicza miesięczne oprocentowanie dzieląc roczne oprocentowanie przez 12 miesięcy i 100
    $number_of_payments = $years * 12; // Oblicza całkowitą liczbę płatności przeliczając lata na miesiące

    $result = $amount * ($monthly_interest / (1 - pow((1 + $monthly_interest), -$number_of_payments))); // Wzór na równowartość raty kredytu
    $fullResult = $result * $number_of_payments; // Cała kwota do zapłaty
}

//definicja zmiennych kontrolera
$amount = null;
$years = null;
$interest = null;
$result = null;
$fullResult = null;
$messages = array();
$hide_intro = false;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amount, $years, $interest);
if (validate($amount, $years, $interest, $messages, $hide_intro)) { // gdy brak błędów
    process($amount, $years, $interest, $messages, $result, $fullResult);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Przykład php 04');
$smarty->assign('page_description', 'Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header', 'Szablony Smarty');

$smarty->assign('hide_intro', $hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('amount', $amount);
$smarty->assign('years', $years);
$smarty->assign('interest', $interest);
$smarty->assign('result', $result);
$smarty->assign('fullResult', $fullResult);
$smarty->assign('messages', $messages);

// 5. Wywołanie szablonu
$smarty->display(dirname(__FILE__) . '/cred_calc.tpl');
