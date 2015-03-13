<?php

    class RepeatCounter
    {
        function countRepeats($wordInput, $stringInput)
        {
        	$output = "";
        	$string_array = explode(" ", $stringInput);
            if(in_array($wordInput, $string_array)){
            	$output = "match";
            }
            else {
            	$output = "not found";
            }
            return $output;
        }
    }

?>
