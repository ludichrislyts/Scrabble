<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        //test first spec
        function testSingleLetterUnique()
        {
            //Arrange

            $test = new Scrabble;
            var_dump($test->letter_values);
            $inputLetter = "A";

            //Act

            // result of class function
            $input = "k";
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 5;

            //Assert

            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
    }


 ?>
