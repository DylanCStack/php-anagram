<?php
    class Anagram
    {
        function findAnagram($test_case, $control_list)
        {
            $cleaned_test_case = str_split(str_replace(' ', '', strtoupper($test_case)));
            sort($cleaned_test_case);
            $return_array = array();
            foreach($control_list as $control)
            {
                $return_control = $control;
                $cleaned_control = str_split(str_replace(' ', '' ,strtoupper($control)));
                sort($cleaned_control);
                $filtered_test_case = array();
                foreach ($cleaned_test_case as $test_case_letter) {
                    foreach ($cleaned_control as $control_letter) {
                        if($test_case_letter == $control_letter)
                        {
                            array_push($filtered_test_case, $test_case_letter);
                        }
                    }
                }
                if ($cleaned_control == $filtered_test_case && count($filtered_test_case) <= strlen($test_case))
                {
                    if($filtered_test_case == $cleaned_test_case)
                    {
                        array_push($return_array, array($return_control, 1));
                    } else {
                        array_push($return_array, array($return_control, 0));
                    }
                }
            }
            return $return_array;
        }

    }
 ?>
