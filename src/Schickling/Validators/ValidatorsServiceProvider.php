<?php namespace Schickling\Validators;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidatorsServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		Validator::extend('boolean', 'Schickling\Validators\Rules\BooleanRule@validate');
		Validator::extend('optional', 'Schickling\Validators\Rules\OptionalRule@validate');
		Validator::extend('iban', 'Schickling\Validators\Rules\IbanRule@validate');
		Validator::extend('bic', 'Schickling\Validators\Rules\BicRule@validate');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Nothing to be done here :)
	}

}