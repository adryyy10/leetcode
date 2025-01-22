<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        // Write your test cases here
        $solution = new Solution;
        $array1 = [3,2,2,3];
        $this->assertEquals(2, $solution->solve($array1, 3));
        $array1 = [0,1,2,2,3,0,4,2];
        $this->assertEquals(5, $solution->solve($array1, 2));
    }
}
?>
