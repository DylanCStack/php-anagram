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

        function test_partial_anagram()
        {
            $test_Anagram = new Anagram;
            $input1 = "beard";
            $input2 = ["Board", "Dear", "Bard", "Baird", "EAR"];

            $result = $test_Anagram->findAnagram($input1, $input2);
            $this->assertEquals(true, $result);
        }

        function test_spaced_word_anagram()
        {
            $test_Anagram = new Anagram;
            $input1 = "Care";
            $input2 = ["race car", "are c", "claptrap", "cake"];

            $result = $test_Anagram->findAnagram($input1, $input2);
            $this->assertEquals(true, $result);
        }

    }
?>
