<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounter extends PHPUnit_Framework_TestCase
    {
        function test_myFunction_single_letter_match()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats();

            //Assert
            $this->assertEquals("match", $result);
        }
    }

?>
