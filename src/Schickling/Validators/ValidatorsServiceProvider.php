<?php namespace Schickling\Validators;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidatorsServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		Validator::extend('boolean', 'Schickling\Validators\Rules\BooleanRule@validate');
	}

}