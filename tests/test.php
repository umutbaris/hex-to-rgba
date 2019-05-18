<?php
use PHPUnit\Framework\TestCase;

/**
 * Class IncludeMehodClass
 */
class Test extends TestCase
{
	/**
	 * @test
	 */
	public function threeDigitWithDash()
	{
		$class = new IncludeMehodClass();
		$hex = '#FFF';
		$alpha = 0.3;
		$result = $class->convertHexToRgba($hex, $alpha);
		$this->assertEquals('rgba(255,255,255,.3)', $result);
	}

	/**
	 * @test
	 */
	public function sixDigitWithDash() {
		$class = new IncludeMehodClass();
		$hex = '#FFFFFF';
		$alpha = 1;
		$result = $class->convertHexToRgba($hex, $alpha);
		$this->assertEquals('rgba(255,255,255,1)', $result);
	}

	/**
	 * @test
	 */
	public function threeDigitWithoutDash() {
		$class = new IncludeMehodClass();
		$hex = 'FFF';
		$alpha = 0.5;
		$result = $class->convertHexToRgba($hex, $alpha);
		$this->assertEquals('rgba(255,255,255,.5)', $result);
	}

	/**
	 * @test
	 */
	public function sixDigitWithoutDash() {
		$class = new IncludeMehodClass();
		$hex = 'FFFFFF';
		$alpha = 1;
		$result = $class->convertHexToRgba($hex, $alpha);
		$this->assertEquals('rgba(255,255,255,1)', $result);
	}

	/**
	 * @test
	 */
	public function execptionForUnvalidHash() {
		$class = new IncludeMehodClass();
		$hex = 'FFFFF';
		$alpha = 1;
		$this->expectException(Exception::class);
		$result = $class->convertHexToRgba($hex, $alpha);
	}

	/**
	 * @test
	 */
	public function exceptionWithoutHex(){
		$class = new IncludeMehodClass();
		$hex = '';
		$alpha = 1;
		$this->expectException(Exception::class);
		$result = $class->convertHexToRgba($hex, $alpha);
	}
}