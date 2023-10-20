<?php
use PHPUnit\Framework\TestCase;
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php 
//path to run ./vendor/bin/phpunit --bootstrap

//Class yang mau di Test
require_once "Wordcount.php";
class SimpleTest extends TestCase

{
    public function testCountWords()
    {
        //Kita pakai class yang yang mau kita test.
        $Wc = new WordCount();

        //Kita masukan parameter 4 kata, yang harusmya dapat output 4
        $TestSentence = "My name is ETA"; //4 kata.. 
        $WordCount = $Wc->countWords($TestSentence);

        //Kita assert equal
        $this->assertEquals(4, $WordCount);
    }
}

