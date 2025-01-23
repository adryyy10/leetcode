<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals(2, $solution->solve([1,3,5,6], 5));
        $this->assertEquals(4, $solution->solve([1,3,5,6], 7));
        $this->assertEquals(1, $solution->solve([1,3,5,6], 2));
        $this->assertEquals(0, $solution->solve([1], 1));
    }
}
?>
