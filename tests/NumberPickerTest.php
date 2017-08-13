<?php
require_once(__DIR__ . '/../src/NumberPicker.php');

use PHPUnit\Framework\TestCase;
use GuessNumber\NumberPicker;

/**
 * This class implements unit tests to test methods in NumberPicker.
 */
class NumberPickerTest extends TestCase
{
    /**
     * Test pickNumber() when the range is valid.
     */
    public function testPickNumberRange()
    {
        $numberPicker = new NumberPicker ();
        $number = $numberPicker->pickNumber ( 1, 4 );
        $this->assertGreaterThanOrEqual ( 1, $number );
        $this->assertLessThanOrEqual ( 4, $number );
    }

    /**
     * Test pickNumber() when using the default range.
     */
    public function testPickNumberDefault()
    {
        $numberPicker = new NumberPicker ();
        $number = $numberPicker->pickNumber ();
        $this->assertGreaterThanOrEqual ( 1, $number );
        $this->assertLessThanOrEqual ( 10, $number );
    }

    /**
     * Test pickNumber() when passed an invalid range.
     */
    public function testPickNumberInvalidInput()
    {
        $numberPicker = new NumberPicker ();
        $this->expectException ( Exception::class );
        $number = $numberPicker->pickNumber ( 'x', 'y' );
    }
}
