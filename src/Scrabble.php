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
            $five_point_letters = array("K");
            // $eight_point_letters = array("J", "X");
            // $ten_point_Letters = array("Q", "Z");
            $this->letter_values = array_fill_keys($five_point_letters, 5);

            //BACKUP PLAN, MAKE EACH LETTER HAVE A VALUE SEPARATELY :-(


        }

        function getScore($inputString)
        {
            strtoupper($inputString);

            return 0;
        }
    }
 ?>
