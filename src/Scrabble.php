<?php
    class Scrabble
    {
        //array of key (number) value (letter) pairs
        public $letter_values = array();

        function __construct()
        {
            //TRYING TO MAKE A KEY VALUE ARRAY (FAILING)

            // $one_point_letters = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
            // $two_point_letters = array('D', 'G');
            // $three_point_letters = array('B', 'C', 'M', 'P');
            // $four_point_letters = array('F', 'H', 'V', 'W', 'Y');
            $five_point_letters = array("K" => 5);
            // $eight_point_letters = array("J", "X");
            // $ten_point_Letters = array("Q", "Z");

            array_push($this->letter_values, $five_point_letters);

            //BACKUP PLAN, MAKE EACH LETTER HAVE A VALUE SEPARATELY :-(


        }

        function getScore($input_string)
        {
            $word_score = 0;
            strtoupper($input_string);
            //$letters_to_score = explode(" ", strtoupper($inputString));
            //var_dump($letters_to_score);
            //$word_score = array_search($letters_to_score, $this->letter_values);
            $word_score = array_search($input_string, $this->letter_values);


            return $word_score;
        }
    }
 ?>
