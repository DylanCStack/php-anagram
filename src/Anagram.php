<?php
    class Anagram
    {
        function findAnagram($test_case, $control_list)
        {
            $cleaned_test_case = str_split(strtoupper($test_case));
            sort($cleaned_test_case);
            foreach($control_list as $control)
            {
                $cleaned_control = str_split(strtoupper($control));
                sort($cleaned_control);
                if ($cleaned_control == $cleaned_test_case)
                {
                    return true;
                }
            }
        }

    }
 ?>
