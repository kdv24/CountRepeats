<?php

    class RepeatCounter
    {
        function countRepeats($wordInput, $stringInput)
        {	
        	$output = "";
        	$count = 0;
        	$string_array = explode(" ", $stringInput);
            if(in_array($wordInput, $string_array)){
            	$count = $count + 1;
            	$output = "match: ";
            }
            else {
            	$output = "not found";
            	$count = "";
            }
            return $output . $count;
        }

        
    }

?>
