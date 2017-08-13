<?php

require_once(__DIR__ . '/../src/NumberPicker.php');

use PHPUnit\Framework\TestCase;
use GuessNumber\NumberPicker;

class NumberPickerTest extends TestCase
{
	public function testPickNumberRange()
	{
		$numberPicker = new NumberPicker();
		$number = $numberPicker->pickNumber(1, 4);
		$this->assertGreaterThanOrEqual(1, $number);
		$this->assertLessThanOrEqual(4, $number);
	}
}