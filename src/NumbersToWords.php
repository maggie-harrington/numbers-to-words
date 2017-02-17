<?php
    class NumbersToWords
    {
        private $userInput;

        function __construct($numberInput)
        {
            $this->userInput = $numberInput;
        }

        function getUserInput()
        {
            return $this->userInput;
        }

        function convertToWords($numberInput)
        {
            $digitMap2 = array('0'=>' ', '1'=>'ten', '2'=>'twenty', '3'=>'thirty', '4'=>'forty', '5'=>'fifty', '6'=>'sixty', '7'=>'seventy', '8'=>'eighty', '9'=>'ninety');

            $digitMap1 = array('0'=>'zero', '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine');

            // array created from user input number, split by digits
            $numberInputSplit = str_split($numberInput);

            $wordOutput = "";
            $sizeofArray = sizeof($numberInputSplit);
            var_dump($sizeofArray);
            // for ($i = sizeof($numberInputSplit); $i > 0; $i--) {
                if (sizeof($numberInputSplit) == 2 ) {
                    $wordOutput = $wordOutput . $digitMap2[$numberInputSplit[0]] . " " . $digitMap1[$numberInputSplit[1]];


                } elseif (sizeof($numberInputSplit) == 1 ) {
                    // var_dump($wordOutput);
                    $wordOutput .= $digitMap1[$numberInputSplit[0]];
                    // $wordOutput .= $digitMap1[$numberInput];
                } else {
                    return false;
                }

            // }


            return $wordOutput;
        }
    }
?>
