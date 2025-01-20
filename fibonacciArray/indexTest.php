<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals([], $solution->solve(0));
        $this->assertEquals([0, 1], $solution->solve(2));
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $solution->solve(10));
    }
}
?>
