<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals([1,2,3,4], $solution->solve([1,2,3,3]));
        $this->assertEquals([1,0], $solution->solve([9]));
    }
}
?>
