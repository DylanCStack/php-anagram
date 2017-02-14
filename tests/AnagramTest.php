<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_tautology()
        {
            $test_Anagram = new Anagram;
            $input1 = "Cake";
            $input2 = ["Cake"];

            $result = $test_Anagram->findAnagram($input1, $input2);
            $this->assertEquals(true, $result);
        }

        function test_list_tautology()
        {
            $test_Anagram = new Anagram;
            $input1 = "Cake";
            $input2 = ["Cake", "cupcake", "break", "cowpie"];

            $result = $test_Anagram->findAnagram($input1, $input2);
            $this->assertEquals(true, $result);
        }
        function test_list_anagram()
        {
            $test_Anagram = new Anagram;
            $input1 = "beard";
            $input2 = ["baird", "bread", "break", "bard"];

            $result = $test_Anagram->findAnagram($input1, $input2);
            $this->assertEquals(true, $result);
        }

    }
?>
