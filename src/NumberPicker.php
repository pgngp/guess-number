<?php

namespace GuessNumber;

use Exception;

/**
 * This class implements the logic that picks a random number between 1 and 10.
 */
class NumberPicker
{
    /**
     * Returns a random number between the given range.
     *
     * @param int $min  Min value of random number.
     * @param int $max  Max value of random number.
     * @return A random number in the given range.
     */
    public function pickNumber($min = 1, $max = 10)
    {
        try {
            $randNumber = rand($min, $max);
        } catch (Exception $exception) {
            throw new Exception('Invalid range.');
        }

        return $randNumber;
    }
}
