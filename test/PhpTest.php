<?php
require_once  '../vendor/autoload.php';
require "../src/php/MinNumber.php";
require "../src/php/RandomNumber.php";


use PHPUnit\Framework\TestCase;


final class  PhpTest  extends TestCase{



    public function testGetMinNumber(): void {

        $arrayTest = [1, 20, 200, 3, 40, 2];

        $response = getMinNumber($arrayTest);

        $this->assertEquals(1, $response);

    }

    public function testGenerateMinMaxRandomNumber(): void {

        $size = 10;
        $min = 1;
        $max = 100;


        $response = getRandomNumber($size, $min, $max);

        $this->assertCount(10, $response);

        foreach ($response as $item) {

            $this->assertThat(
                $item,
                $this->logicalAnd(
                    $this->greaterThan($min),
                    $this->lessThan($max)
                )
            );



        }





    }




}