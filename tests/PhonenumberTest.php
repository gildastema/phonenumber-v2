<?php

namespace Gildastema\Phonenumber\Tests;

use Gildastema\Phonenumber\Phonenumber;
use PHPUnit\Framework\TestCase;

class PhonenumberTest extends TestCase
{
    private Phonenumber $phone;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->phone = new Phonenumber();
    }

    /** @test */
    public function orange()
    {
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('691131446') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('655236987') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('656236987') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('657236987') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('658236987') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('659236987') );
    }
    /** @test  */
    public function mtn()
    {
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('677609512') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('680609512') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('681609512') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('650236987') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('651236987') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('652236987') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('653236987') );
        $this->assertEquals(Phonenumber::MTN , $this->phone->getOperator('654236987') );
    }
    /** @test  */
    public function phone_with_prefix_orange()
    {
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('237691131446') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('237655236987') );
        $this->assertEquals(Phonenumber::ORANGE , $this->phone->getOperator('237656236987') );
    }
    /** @test */
    public function phone_without_prefix()
    {
        $this->assertEquals($this->phone->getPhoneWithoutPrefix('237691131446'), '691131446');
    }
    
    
}