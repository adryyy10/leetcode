<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals(5, $solution->solve([10, 22, 9, 33, 21, 50, 41, 60]));
        $this->assertEquals(4, $solution->solve([0, 1, 0, 3, 2, 3]));
    }
}
?>
