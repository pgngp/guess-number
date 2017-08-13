<?php

require_once(__DIR__ . '/../src/NumberPicker.php');

use Exception;
use GuessNumber\NumberPicker;

$min = 1;
$max = 10;

if (isset($_GET['min'])) {
	$min = trim($_GET['min']);
}

if (isset($_GET['max'])) {
	$max = trim($_GET['max']);
}

if ($min > $max) {
	throw new Exception('Error: Min is greater than max.');
}

$numberPicker = new NumberPicker();
echo $numberPicker->pickNumber($min, $max);