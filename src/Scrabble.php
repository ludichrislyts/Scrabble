<?php
    class Scrabble
    {
        //array of key (number) value (letter) pairs
        public $letterValues = array();

        function __construct()
        {
            // $one_point_letters = array('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
            // $two_point_letters = array('D', 'G');
            // $three_point_letters = array('B', 'C', 'M', 'P');
            // $four_point_letters = array('F', 'H', 'V', 'W', 'Y');
            $five_point_letters = array("K");
            $letterValues = array_fill_keys(5=>$five_point_letters);

        }

        function getScore($inputString)
        {
            return 0;
        }
    }
 ?>
