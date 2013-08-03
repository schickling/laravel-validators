<?php namespace Schickling\Validators\Rules;

interface RuleInterface
{
	public function validate($attribute, $value, array $parameters = array());
}