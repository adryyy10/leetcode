<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals(5, $solution->solve('Hello World'));
        $this->assertEquals(4, $solution->solve('   fly me   to   the moon  '));
        $this->assertEquals(6, $solution->solve('luffy is still joyboy'));
    }
}
?>
