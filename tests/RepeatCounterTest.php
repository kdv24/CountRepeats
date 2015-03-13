<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats()
        {
            //Arrange
            $test_countRepeats = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "a";

            //Act
            $result = $test_countRepeats->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match", $result);
        }
    }

?>
