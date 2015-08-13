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
        //test seventh spec
        function testSingleLetterSharedTenPoints()
        {
            //Arrange
            $test = new Scrabble;
            $input = "Q";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 10;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test eigth spec
        function testTwoLetterSharedValue()
        {
            //Arrange
            $test = new Scrabble;
            $input = "TO";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 2;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test ninth spec
        function testTwoLetterDifValue()
        {
            //Arrange
            $test = new Scrabble;
            $input = "DO";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 3;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test tenth spec
        function testThreeLetterSharedValue()
        {
            //Arrange
            $test = new Scrabble;
            $input = "SON";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 3;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
        //test eleventh spec
        function testThreeLetterDifValue()
        {
            //Arrange
            $test = new Scrabble;
            $input = "POD";

            //Act
            // result of class function
            $result = $test->getScore($input);
            // what the correct answer should be
            $answer = 6;

            //Assert
            //compare class function to correct anwser
            $this->assertEquals($answer, $result);
        }
    }


 ?>
