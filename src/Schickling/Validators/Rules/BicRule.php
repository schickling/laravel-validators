<?php namespace Schickling\Validators\Rules;

class BicRule implements RuleInterface
{

	public function validate($attribute, $value, array $parameters = array())
	{
		return (bool) preg_match('/^([a-zA-Z]{4}[a-zA-Z]{2}[a-zA-Z0-9]{2}([a-zA-Z0-9]{3})?)$/', $value);
	}

}