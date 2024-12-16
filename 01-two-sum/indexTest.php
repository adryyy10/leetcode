<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;

        $this->assertEquals([0,1], $solution->solve([2,7,11,15], 9));
        $this->assertEquals([1,2], $solution->solve([3,2,4], 6));
        $this->assertEquals([0,1], $solution->solve([3,3], 6));
    }
}
?>
