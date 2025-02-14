<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve(): void
    {
        // Write your test cases here
        $solution = new Solution;
        $this->assertEquals('100', $solution->solve('11', '1'));
    }
}
?>
