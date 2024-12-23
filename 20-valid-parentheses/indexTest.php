<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals(true, $solution->solve("()"));
        $this->assertEquals(true, $solution->solve("()[]{}"));
        $this->assertEquals(false, $solution->solve("(]"));
        $this->assertEquals(false, $solution->solve("("));
        $this->assertEquals(false, $solution->solve("(("));
    }
}
?>
