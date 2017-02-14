<?php
    class Anagram
    {
        function findTautology($test_case, $control_list)
        {
            $cleaned_test_case = strtoupper($test_case);

            foreach($control_list as $control)
            {
                $cleaned_control = strtoupper($control);
                if ($cleaned_control == $cleaned_test_case)
                {
                    return true;
                }
            }
        }

    }
 ?>
