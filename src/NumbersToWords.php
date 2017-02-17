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

            $digitMap5 = array('0'=>'million', '1'=>'one million', '2'=>'two million', '3'=>'three million', '4'=>'four million', '5'=>'five million', '6'=>'six million', '7'=>'seven million', '8'=>'eight million', '9'=>'nine million');

            $digitMap4 = array('0'=>'thousand', '1'=>'one thousand', '2'=>'two thousand', '3'=>'three thousand', '4'=>'four thousand', '5'=>'five thousand', '6'=>'six thousand', '7'=>'seven thousand', '8'=>'eight thousand', '9'=>'nine thousand');

            $digitMap3 = array('0'=>'', '1'=>'one hundred', '2'=>'two hundred', '3'=>'three hundred', '4'=>'four hundred', '5'=>'five hundred', '6'=>'six hundred', '7'=>'seven hundred', '8'=>'eight hundred', '9'=>'nine hundred');

            $digitMap2 = array('0'=>'', '1'=>'ten', '2'=>'twenty', '3'=>'thirty', '4'=>'forty', '5'=>'fifty', '6'=>'sixty', '7'=>'seventy', '8'=>'eighty', '9'=>'ninety');

            $digitMapTeen = array('0'=>'ten', '1'=>'eleven', '2'=>'twelve', '3'=>'thirteen', '4'=>'fourteen', '5'=>'fifteen', '6'=>'sixteen', '7'=>'seventeen', '8'=>'eighteen', '9'=>'nineteen');

            $digitMap1 = array('0'=>'', '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine');

            // array created from user input number, split by digits
            $numberInputSplit = str_split($numberInput);

            $wordOutput = "";
            $sizeofArray = sizeof($numberInputSplit);

                if ($sizeofArray == 1 ) {
                    if ($numberInputSplit[0] == '0') {
                        $wordOutput .= 'zero';
                    } else {
                        $wordOutput .= $digitMap1[$numberInputSplit[0]];
                    }

                } elseif ($sizeofArray == 2 ) {
                    if ($numberInputSplit[0] == '1') {
                        $wordOutput = $wordOutput . $digitMapTeen[$numberInputSplit[1]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap2[$numberInputSplit[0]] . " " . $digitMap1[$numberInputSplit[1]];
                    }

                } elseif ($sizeofArray == 3 ) {
                    if ($numberInputSplit[1] == '1') {
                        $wordOutput = $wordOutput . $digitMap3[$numberInputSplit[0]] . " " . $digitMapTeen[$numberInputSplit[2]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap3[$numberInputSplit[0]] . " " . $digitMap2[$numberInputSplit[1]] . " " . $digitMap1[$numberInputSplit[2]];
                    }

                } elseif ($sizeofArray == 4 ) {
                    if ($numberInputSplit[2] == '1') {
                        $wordOutput = $wordOutput . $digitMap4[$numberInputSplit[0]] . " " . $digitMap3[$numberInputSplit[1]] . " " .  $digitMapTeen[$numberInputSplit[3]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap4[$numberInputSplit[0]] . " " . $digitMap3[$numberInputSplit[1]] . " " . $digitMap2[$numberInputSplit[2]] . " " . $digitMap1[$numberInputSplit[3]];
                    }

                } elseif ($sizeofArray == 5 ) {
                    if ($numberInputSplit[3] == '1') {
                        $wordOutput = $wordOutput . $digitMap2[$numberInputSplit[0]] . " " . $digitMap4[$numberInputSplit[1]] . " " . $digitMap3[$numberInputSplit[2]] . " " .  $digitMapTeen[$numberInputSplit[4]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap2[$numberInputSplit[0]] . " " . $digitMap4[$numberInputSplit[1]] . " " . $digitMap3[$numberInputSplit[2]] . " " . $digitMap2[$numberInputSplit[3]] . " " . $digitMap1[$numberInputSplit[4]];
                    }

                } elseif ($sizeofArray == 6 ) {
                    if ($numberInputSplit[4] == '1') {
                        $wordOutput = $wordOutput . $digitMap3[$numberInputSplit[0]] . " " . $digitMap2[$numberInputSplit[1]] . " " . $digitMap4[$numberInputSplit[2]] . " " . $digitMap3[$numberInputSplit[3]] . " " .  $digitMapTeen[$numberInputSplit[5]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap3[$numberInputSplit[0]] . " " . $digitMap2[$numberInputSplit[1]] . " " . $digitMap4[$numberInputSplit[2]] . " " . $digitMap3[$numberInputSplit[3]] . " " . $digitMap2[$numberInputSplit[4]] . " " . $digitMap1[$numberInputSplit[5]];
                    }

                } elseif ($sizeofArray == 7 ) {
                    if ($numberInputSplit[5] == '1') {
                        $wordOutput = $wordOutput . $digitMap5[$numberInputSplit[0]] . " " . $digitMap3[$numberInputSplit[1]] . " " . $digitMap2[$numberInputSplit[2]] . " " . $digitMap4[$numberInputSplit[3]] . " " . $digitMap3[$numberInputSplit[4]] . " " .  $digitMapTeen[$numberInputSplit[6]];
                    } else {
                        $wordOutput = $wordOutput . $digitMap5[$numberInputSplit[0]] . " " . $digitMap3[$numberInputSplit[1]] . " " . $digitMap2[$numberInputSplit[2]] . " " . $digitMap4[$numberInputSplit[3]] . " " . $digitMap3[$numberInputSplit[4]] . " " . $digitMap2[$numberInputSplit[5]] . " " . $digitMap1[$numberInputSplit[6]];
                    }

                } else {
                    return "Sorry, I can't count that high yet.";
                }

            return $wordOutput;
        }
    }
?>
