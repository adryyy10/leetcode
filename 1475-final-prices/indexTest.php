<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals([4,2,4,2,3], $solution->solve([8,4,6,2,3]));
        $this->assertEquals([1,2,3,4,5], $solution->solve([1,2,3,4,5]));
        $this->assertEquals([9,0,1,6], $solution->solve([10,1,1,6]));
    }
}
?>
