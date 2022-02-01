<?php

namespace Gildastema\Phonenumber\Tests;

use Gildastema\Phonenumber\PhoneFaker;
use Gildastema\Phonenumber\Phonenumber;
use PHPUnit\Framework\TestCase;

class PhoneFakerTest extends TestCase
{
    private PhoneFaker $phoneFaker;
    private Phonenumber  $phonenumber;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->phoneFaker = new PhoneFaker();
        $this->phonenumber = new Phonenumber();
    }

    /** @test  */
    public function orange()
    {
        $this->assertEquals(Phonenumber::ORANGE, $this->phonenumber->getOperator($this->phoneFaker->generate(Phonenumber::ORANGE)));
    }

    /** @test  */
    public function mtn()
    {
        $this->assertEquals(Phonenumber::MTN, $this->phonenumber->getOperator($this->phoneFaker->generate(Phonenumber::MTN)));
    }
}