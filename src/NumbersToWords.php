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
            $wordOutput = 'two';
            return $wordOutput;
        }
    }
?>
