<?php
require_once(__DIR__ . '/../src/NumberPicker.php');

use Exception;
use GuessNumber\NumberPicker;

/**
 * This script receives API request from the client to pick a random number.
 * It calls pickNumber() in NumberPicker class to pick a random number and sends
 * it back to the client.
 */

$min = 1;
$max = 10;

if (isset ( $_GET ['min'] )) {
    $min = trim ( $_GET ['min'] );
}

if (isset ( $_GET ['max'] )) {
    $max = trim ( $_GET ['max'] );
}

if ($min > $max) {
    throw new Exception ( 'Error: Min is greater than max.' );
}

$numberPicker = new NumberPicker ();
echo $numberPicker->pickNumber ( $min, $max );
