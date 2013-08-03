<?php namespace Schickling\Validators\Rules;

class BicRuleTest extends \PHPUnit_Framework_TestCase
{

	private $rule;

	public function setUp()
	{
		$this->rule = new BicRule();
	}

	public function testValidBic()
	{
		$result = $this->rule->validate('iban', 'OKOYFIHH');

		$this->assertTrue($result);
	}

	public function testInvalidBic()
	{
		$result = $this->rule->validate('iban', 'XXX');

		$this->assertFalse($result);
	}

}
