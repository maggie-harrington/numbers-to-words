<?php
require_once "src/NumbersToWords.php";
class NumbersToWordsTest extends PHPUnit_Framework_TestCase
{

    function test1CheckConvertToWords()
    {
        // Arrange
        $testNumber = '2';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('two', $result);
    }

    function test2CheckConvertToWords()
    {
        // Arrange
        $testNumber = '22';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('twenty two', $result);
    }

    function test3CheckConvertToWords()
    {
        // Arrange
        $testNumber = '222';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('two hundred twenty two', $result);
    }

    function test4CheckConvertToWords()
    {
        // Arrange
        $testNumber = '2222';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('two thousand two hundred twenty two', $result);
    }

    function test5CheckConvertToWords()
    {
        // Arrange
        $testNumber = '22222';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('twenty two thousand two hundred twenty two', $result);
    }

    function test6CheckConvertToWords()
    {
        // Arrange
        $testNumber = '222222';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('two hundred twenty two thousand two hundred twenty two', $result);
    }

    function test7CheckConvertToWords()
    {
        // Arrange
        $testNumber = '2222222';
        $testNumbersToWords = new NumbersToWords($testNumber);

        // Act
        $result = $testNumbersToWords->convertToWords($testWord);

        // Assert
        $this->assertEquals('two million two hundred twenty two thousand two hundred', $result);
    }

}
?>
