<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount = $_REQUEST['amount']; //Kwota
$years = $_REQUEST['years']; //Liczba lat
$interest = $_REQUEST['interest']; //Oprocentowanie

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if (!(isset ($amount) && isset ($years) && isset ($interest))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

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
if (empty ($messages)) {

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (!is_numeric($amount)) {
		$messages[] = 'Kwota kredytu nie jest liczbą całkowitą';
	}

	if (!is_numeric($years)) {
		$messages[] = 'Liczba lat nie jest liczbą całkowitą';
	}

	if (!is_numeric($interest)) {
		$messages[] = 'Oprocentowanie nie jest liczbą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ($messages)) { // gdy brak błędów

	//konwersja parametrów na int
	$amount = intval($amount);
	$years = intval($years);
	$interest = floatval($interest);

	//wykonanie operacji
	$monthly_interest = ($interest / 12) / 100; //  Oblicza miesięczne oprocentowanie dzieląc roczne oprocentowanie przez 12 miesięcy i 100
	$number_of_payments = $years * 12; // Oblicza całkowitą liczbę płatności przeliczając lata na miesiące

	$result = $amount * ($monthly_interest / (1 - pow((1 + $monthly_interest), -$number_of_payments))); // Wzór na równowartość raty kredytu
	$fullResult = $result * $number_of_payments; // Cała kwota do zapłaty
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'cred_calc_view.php';