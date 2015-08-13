<?php
    class Scrabble
    {
        //array of key (number) value (letter) pairs
        //public $letter_values = array();

        // function __construct()
        // {
            //TRYING TO MAKE A KEY VALUE ARRAY (FAILING)

            // $one_point_letters = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
            // $two_point_letters = array('D', 'G');
            // $three_point_letters = array('B', 'C', 'M', 'P');
            // $four_point_letters = array('F', 'H', 'V', 'W', 'Y');
            //$five_point_letters = array("K");
            //$five_point_letter_array = array_fill_keys($five_point_letters, 5);

            // $eight_point_letters = array("J", "X");
            // $ten_point_Letters = array("Q", "Z");

            //$this->letter_values = array_fill(0, 5, 0);
            //array_push($this->letter_values, $five_point_letters);

            //BACKUP PLAN, MAKE EACH LETTER HAVE A VALUE SEPARATELY :-(
            //array_push($this->letter_values, ("K" => 5));


        //}

        function getScore($input_string)
        {
            $letter_values = array("A" => 1, "E" => 1, "I" => 1, "O" => 1, "U" => 1, "L" => 1, "N" => 1, "R" => 1,
                    "S" => 1, "T" => 1, "D" => 2, "G" => 2, "B" => 3, "C" => 3, "M" => 3, "P" => 3, "F" => 4, "H" => 4,
                    "V" => 4, "W" => 4, "Y" => 4, "K" => 5, "J" => 8, "X" => 8, "Q" => 10, "Z" => 10);
            $word_score = 0;
            $upper_string = strtoupper($input_string);
            $input_string_array = str_split($upper_string);
            //var_dump($input_string_array);
            $valid_word = 0;
            foreach ($input_string_array as $letter){
                if (array_key_exists($letter, $letter_values)){
                    $word_score += $letter_values[$letter];
                    ++$valid_word;
                }
                else{
                    $error_message = "You entered an invalid character, please try again.";
                    return $error_message;
                }
            }
            //var_dump($valid_word);
            //$letters_to_score = explode(" ", strtoupper($inputString));
            //var_dump($letters_to_score);
            //$word_score = array_search($letters_to_score, $this->letter_values);

            //$word_score = array_search($input_string, $this->letter_values);

            //check if word length is at least 2 letters
            if ($valid_word > 1){
                return $word_score;
            } else{
                return "Word is not long enough to score in Scrabble.";
            }
        }
    }
 ?>
