<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals('13', $solution->evaluateExpression('3 + 5 * 2'));
        $this->assertEquals('16', $solution->evaluateExpression('(3 + 5) * 2'));
        $this->assertEquals('17', $solution->evaluateExpression('2 + 3 * (7 - (4 / 2))'));
        $this->assertEquals('7', $solution->evaluateExpression('10 / (2 + 3) * 4 - 1'));
    }
}
?>
