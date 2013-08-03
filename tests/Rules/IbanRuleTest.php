<?php namespace Schickling\Validators\Rules;

class IbanRuleTest extends \PHPUnit_Framework_TestCase
{

	private $rule;

	public function setUp()
	{
		$this->rule = new IbanRule();
	}

	public function testIbanFromAlbania()
	{
		$result = $this->rule->validate('iban', 'AL47212110090000000235698741');

		$this->assertTrue($result);
	}

	public function testIbanFromFrance()
	{
		$result = $this->rule->validate('iban', 'FR1420041010050500013M02606');

		$this->assertTrue($result);
	}

	public function testIbanFromGermany()
	{
		$result = $this->rule->validate('iban', 'DE89370400440532013000');

		$this->assertTrue($result);
	}

	public function testIbanFromBelgium()
	{
		$result = $this->rule->validate('iban', 'BE62510007547061');

		$this->assertTrue($result);
	}

	public function testIbanFromMalta()
	{
		$result = $this->rule->validate('iban', 'MT84MALT011000012345MTLCAST001S');

		$this->assertTrue($result);
	}

	public function testInvalidIban()
	{
		$result = $this->rule->validate('iban', 'XXX');

		$this->assertFalse($result);
	}

}
