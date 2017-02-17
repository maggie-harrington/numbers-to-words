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
            $digitMap3 = array('0'=>'', '1'=>'one hundred', '2'=>'two hundred', '3'=>'three hundred', '4'=>'four hundred', '5'=>'five hundred', '6'=>'six hundred', '7'=>'seven hundred', '8'=>'eight hundred', '9'=>'nine hundred');

            $digitMap2 = array('0'=>'', '1'=>'ten', '2'=>'twenty', '3'=>'thirty', '4'=>'forty', '5'=>'fifty', '6'=>'sixty', '7'=>'seventy', '8'=>'eighty', '9'=>'ninety');

            $digitMap1 = array('0'=>'', '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine');

            // array created from user input number, split by digits
            $numberInputSplit = str_split($numberInput);

            $wordOutput = "";
            $sizeofArray = sizeof($numberInputSplit);
            var_dump($sizeofArray);
            // for ($i = sizeof($numberInputSplit); $i > 0; $i--) {
                if ($sizeofArray == 1 ) {
                    // var_dump($wordOutput);
                    $wordOutput .= $digitMap1[$numberInputSplit[0]];
                    // $wordOutput .= $digitMap1[$numberInput];

                } elseif ($sizeofArray == 2 ) {

                    // for ($i = 0; $i < $sizeofArray; $i++) {
                    $wordOutput = $wordOutput . $digitMap2[$numberInputSplit[0]] . " " . $digitMap1[$numberInputSplit[1]];
                    // }
                } elseif ($sizeofArray == 3 ) {
                    $wordOutput = $wordOutput . $digitMap3[$numberInputSplit[0]] . " " . $digitMap2[$numberInputSplit[1]] . " " . $digitMap1[$numberInputSplit[2]];
                    
                } else {
                    return false;
                }

            // }


            return $wordOutput;
        }
    }
?>
