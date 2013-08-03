<?php namespace Schickling\Validators\Rules;

class IbanRule implements RuleInterface
{

	public function validate($attribute, $value, array $parameters = array())
	{
		return (bool) preg_match('/^[a-zA-Z]{2}[0-9]{2}[a-zA-Z0-9]{4}[0-9]{7}([a-zA-Z0-9]?){0,16}$/', $value);
	}

}