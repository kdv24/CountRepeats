<?php

    class RepeatCounter
    {
        function countRepeats($wordInput, $stringInput)
        {	
        	$output = "";
        	$count = 0;
        	$string_array = explode(" ", $stringInput);
        	foreach($string_array as $string_word){
	            if($wordInput == $string_word){
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
    }

?>
