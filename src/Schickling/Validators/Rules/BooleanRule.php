<?php namespace Schickling\Validators\Rules;

class BooleanRule implements RuleInterface
{

	public function validate($attribute, $value, array $parameters = array())
	{
		return is_bool($value) or is_numeric($value);
	}

}