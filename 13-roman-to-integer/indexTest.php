<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals(3, $solution->solve("III"));
        $this->assertEquals(58, $solution->solve("LVIII"));
        $this->assertEquals(1994, $solution->solve("MCMXCIV"));
    }
}
?>
