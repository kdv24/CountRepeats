<?php

    class RepeatCounter
    {
        function countRepeats($wordInput, $stringInput)
        {	
        	$output = "";
        	$count = 0;
        	$string_array = array();
        	$string_array = explode(" ", $stringInput);
        	foreach ($string_array as $word){
	            if($word == $wordInput){
	            	$count = $count + 1;
	            	$output = "match: ";
	            }
	            else {
	            	
	            	$count = $count + 0;
	            }
	        } 
            return $count;
        }


    }

?>
