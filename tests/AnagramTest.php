<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_tautology()
        {
            $test_Anagram = new Anagram;
            $input1 = "Cake";
            $input2 = ["Cake"];

            $result = $test_Anagram->findTautology($input1, $input2);
            $this->assertEquals(true, $result);
        }
    }
?>
