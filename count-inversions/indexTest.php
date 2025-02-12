<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals(3, $solution->solve([2,4,1,3,5]));
        $this->assertEquals(7, $solution->solve([5,3,2,1,4]));
    }
}
?>
