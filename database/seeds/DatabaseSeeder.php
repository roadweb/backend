<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
		$this->call('AnonymousTableSeeder');
		$this->call('SocialNetworkTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('TrainingTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('StateTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('RightTableSeeder');
		$this->call('JobsTableSeeder');
		$this->call('UserDetailsTableSeeder');
		$this->call('PostTableSeeder');
		$this->call('UserSocialNetworkTableSeeder');
		$this->call('PostHasTagTableSeeder');
		$this->call('SEOTableSeeder');
		$this->call('AskTableSeeder');
		Model::reguard();
	}
}