<?php

    class RepeatCounter
    {
        function countRepeats($wordInput, $stringInput)
        {
        	$output = "";
            if($wordInput == $stringInput){
            	$output = "match";
            }
            return $output;
        }
    }

?>
