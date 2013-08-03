<?php namespace Schickling\Validators\Rules;

class BooleanRuleTest extends \PHPUnit_Framework_TestCase
{

	private $rule;

	public function setUp()
	{
		$this->rule = new BooleanRule();
	}

	public function testTrue()
	{
		$result = $this->rule->validate('boolean', true);

		$this->assertTrue($result);
	}

	public function testFalse()
	{
		$result = $this->rule->validate('boolean', false);

		$this->assertTrue($result);
	}

	public function testStringTrue()
	{
		$result = $this->rule->validate('boolean', 'true');

		$this->assertFalse($result);
	}

	public function testStringFalse()
	{
		$result = $this->rule->validate('boolean', 'false');

		$this->assertFalse($result);
	}

	public function testZero()
	{
		$result = $this->rule->validate('boolean', 0);

		$this->assertTrue($result);
	}

	public function testOne()
	{
		$result = $this->rule->validate('boolean', 1);

		$this->assertTrue($result);
	}

	public function testBigInt()
	{
		$result = $this->rule->validate('boolean', 99999);

		$this->assertTrue($result);
	}

}
