<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(['email' => 'docent@mydavinci.nl', 'password' => Hash::make('docent')]);
		User::create(['email' => 'leerling@mydavinci.nl', 'password' => Hash::make('leerling')]);
	}
}
