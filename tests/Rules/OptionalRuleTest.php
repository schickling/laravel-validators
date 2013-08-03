<?php namespace Schickling\Validators\Rules;

class OptionalRuleTest extends \PHPUnit_Framework_TestCase
{

	private $rule;

	public function setUp()
	{
		$this->rule = new OptionalRule();
	}

	public function testEmptyString()
	{
		$result = $this->rule->validate('optional', '');

		$this->assertTrue($result);
	}

	public function testFalse()
	{
		$result = $this->rule->validate('optional', false);

		$this->assertTrue($result);
	}

	public function testNull()
	{
		$result = $this->rule->validate('optional', null);

		$this->assertTrue($result);
	}

	public function testMissingAttribute()
	{
		$result = $this->rule->validate(null, null);

		$this->assertFalse($result);
	}

}
