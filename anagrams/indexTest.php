<?php
use PHPUnit\Framework\TestCase;
require './index.php';

class ChallengeTest extends TestCase
{
    public function testSolve()
    {
        $solution = new Solution;
        $this->assertEquals(true, $solution->solve("listen", "silent"));
        $this->assertEquals(true, $solution->solve("Listen", "Silent"));
        $this->assertEquals(true, $solution->solve("The eyes", "They see!"));
        $this->assertEquals(true, $solution->solve("Hello", "Olelh"));
        $this->assertEquals(false, $solution->solve("Apple", "Pineapple"));
    }
}
?>
