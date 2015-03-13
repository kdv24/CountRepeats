<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        //Test one:
        function test_single_letter_match()
        {
            //Arrange
            $test_single_letter_match = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "a";

            //Act
            $result = $test_single_letter_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match: 1", $result);
        }

        //Test two:
        function test_single_letter_no_match()
        {
            //Arrange
            $test_single_letter_no_match = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "b";

            //Act
            $result = $test_single_letter_no_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals(0, $result);
        }
           
        //Test three:        
        function test_multi_letter_match()
        {
            //Arrange
            $test_multi_letter_match = new RepeatCounter;
            $wordInput = "am";
            $stringInput = "am";

            //Act
            $result = $test_multi_letter_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match: 1", $result);
        }

        //Test four:
        function test_multi_letter_no_match()
        {
            //Arrange
            $test_multi_letter_no_match = new RepeatCounter;
            $wordInput = "am";
            $stringInput = "be";

            //Act
            $result = $test_multi_letter_no_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals(0, $result);
        }

        //Test five:
        function test_word_in_string_match()
        {
            //Arrange
            $test_word_in_string_match = new RepeatCounter;
            $wordInput = "happy";
            $stringInput = "I am happy";

            //Act
            $result = $test_word_in_string_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match: 1", $result);
        }        

        //Test six:
        function test_word_in_string_no_match()
        {
            //Arrange
            $test_word_in_string_no_match = new RepeatCounter;
            $wordInput = "happy";
            $stringInput = "I am grouchy";

            //Act
            $result = $test_word_in_string_no_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals(0, $result);
        }          

        //Test seven:
        function test_add_count_if_match()
        {
            //Arrange
            $test_word_in_string_match = new RepeatCounter;
            $wordInput = "happy";
            $stringInput = "I am happy";

            //Act
            $result = $test_word_in_string_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match: 1", $result);
        }  

        //Test eight:
        function test_add_to_count_if_multiple_matches()
        {
            //Arrange
            $test_word_in_string_match = new RepeatCounter;
            $wordInput = "a";
            $stringInput = "This is a boring sentence from a brain staring at a wall.";

            //Act
            $result = $test_word_in_string_match->countRepeats($wordInput, $stringInput);

            //Assert
            $this->assertEquals("match: 3", $result);
        }                    
    }

?>
