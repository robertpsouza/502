<?php


use PHPUNIT\Framework\Testcase;

class testestest extends TestCase
{
	public function testSame(){
		$soma = 3*3*3;
		$this->assertSame(27,$soma);
	}

	public function testTrue(){
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);	
	}

	public function testFalse(){
		$falso = false;
		$this->assertFalse($falso);
	}
	public function testCount(){
		$arr = ["a",1,true];
		$count = count($arr);
		$this->assertSame(3,$count);
		$this->assertCount(3,$arr);
	}

	public function testEmpty(){
		$vazio ="";
		$this->assertEmpty($vazio);
	}

	public function testNUll(){
		$vazio= null;
		$this->assertNull($vazio);

	}

	public function testEquals(){
		$a = "1";
		$b =1;
		$this->assertEquals($a,$b);
	}

}