<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ContactTableSeeder');
	}
}


class ContactTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('contacts')->delete();

        Contact::create(array(
        	'first_name' => 'John',
        	'last_name' => 'Doe',
        	'email_address' => 'john@example.com',
        	'description' => 'My best friend.'
        ));
		
		Contact::create(array(
        	'first_name' => 'Jane',
        	'last_name' => 'Doe',
        	'email_address' => 'jane@example.com',
        	'description' => 'My best friend\'s wife.'
        ));

		Contact::create(array(
        	'first_name' => 'Logan',
        	'last_name' => 'Joecks',
        	'email_address' => 'logan@example.com',
        	'description' => 'This is me and I\'m going to create a little blurb about myself so that it is long, because I want to see what a long string of text looks like'
        ));
	}
}
