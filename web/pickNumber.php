<?php

require_once(__DIR__ . '/../src/NumberPicker.php');

use Exception;
use GuessNumber\NumberPicker;

if (!isset($_GET['min']) || !isset($_GET['max'])) {
	throw new Exception('Min and max of range not specified.');
}

$min = trim($_GET['min']);
$max = trim($_GET['max']);

if ($min > $max) {
	throw new Exception('Error: Min is greater than max.');
}

$numberPicker = new NumberPicker();
echo $numberPicker->pickNumber($min, $max);