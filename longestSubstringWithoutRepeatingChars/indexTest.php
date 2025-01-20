<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals('', $solution->solve(''));
        $this->assertEquals('abcdef', $solution->solve('abcdef'));
        $this->assertEquals('abc', $solution->solve('abcabcbb'));
        $this->assertEquals('b', $solution->solve('bbbbb'));
        $this->assertEquals('wke', $solution->solve('pwwkew'));

    }
}
?>
