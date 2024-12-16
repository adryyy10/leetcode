<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals(true, $solution->solve(121));
        $this->assertEquals(false, $solution->solve(-121));
        $this->assertEquals(false, $solution->solve(1013));
    }
}
?>
