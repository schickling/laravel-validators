<?php namespace Schickling\Validators\Rules;

class OptionalRule implements RuleInterface
{

	public function validate($attribute, $value, array $parameters = array())
	{
		return $attribute !== null;
	}

}