<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals(0, $solution->solve('sadbutsad', 'sad'));
        $this->assertEquals(-1, $solution->solve('leetcode', 'leeto'));
    }
}
?>
