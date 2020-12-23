<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
	}

	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2,$calculator->subtract(6, 4));
	}

	public function testMultiply(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->multiply(2,2));
	}

	public function testDivide(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2,$calculator->divide(4,2));
	}

	public function testDivide0():void
	{
		$calculator = new Calculator();
		self::assertEquals($this->expectException(InvalidArgumentException::class),$calculator->divide(5,0));
	}

	public function testSquare(): void
	{
		$calculator = new Calculator();
		self::assertEquals(8,$calculator->square(2,3));
	}

	public function testSQR(): void
	{
		$calculator = new Calculator();
		self::assertEquals(2, $calculator->sqr(4));
	}
}
