<?php

namespace GuessNumber;

/**
 * This class implements the logic that picks a random number between 1 and 10.
 */
class NumberPicker
{
	/**
	 * Returns a random number
	 * 
	 * @param int $min		Min value of random number.
	 * @param int $max		Max value of random number.
	 */
	public function pickNumber($min = 1, $max = 10)
	{
		return rand($min, $max);
	}
}