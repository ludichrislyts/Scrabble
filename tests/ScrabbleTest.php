<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        //test first spec
        function testSingleLetterUnique()
        {
            //Arrange

            $test = new Scrabble;
            $input = "k";

            //Act

            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 5;

            //Assert

            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test second spec
        function testSingleLetterSharedOnePoint()
        {
            //Arrange
            $test = new Scrabble;
            $input = "A";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 1;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test third spec
        function testSingleLetterSharedTwoPoints()
        {
            //Arrange
            $test = new Scrabble;
            $input = "D";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 2;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test fourth spec
        function testSingleLetterSharedThreePoints()
        {
            //Arrange
            $test = new Scrabble;
            $input = "B";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 3;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test fifth spec
        function testSingleLetterSharedFourPoints()
        {
            //Arrange
            $test = new Scrabble;
            $input = "F";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 4;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test sixth spec
        function testSingleLetterSharedEightPoints()
        {
            //Arrange
            $test = new Scrabble;
            $input = "J";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 8;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
    }


 ?>
