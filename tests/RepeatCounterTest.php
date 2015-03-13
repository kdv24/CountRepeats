<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_single_letter_match()
        {
            //Arrange
            $test_single_letter_match = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "a";

            //Act
            $result = $test_single_letter_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match", $result);
        }

        function test_single_letter_no_match()
        {
            //Arrange
            $test_single_letter_no_match = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "b";

            //Act
            $result = $test_single_letter_no_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("not found", $result);
        }
                
        function test_multi_letter_match()
        {
            //Arrange
            $test_multi_letter_match = new RepeatCounter;
            $wordInput = "am";
            $stringInput = "am";

            //Act
            $result = $test_multi_letter_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match", $result);
        }

        function test_multi_letter_no_match()
        {
            //Arrange
            $test_multi_letter_no_match = new RepeatCounter;
            $wordInput = "am";
            $stringInput = "be";

            //Act
            $result = $test_multi_letter_no_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("not found", $result);
        }

        function test_word_in_string_match()
        {
            //Arrange
            $test_word_in_string_match = new RepeatCounter;
            $wordInput = "happy";
            $stringInput = "I am grouchy";

            //Act
            $result = $test_word_in_string_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("not found", $result);
        }        
    }

?>
