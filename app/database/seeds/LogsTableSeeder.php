<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LogsTableSeeder extends Seeder {

	public function run()
	{
		$logs=array(['descripcion'=>'Marca_acme','created_at' => new DateTime,'updated_at'=> new DateTime,'user_id'=>1,'post_id'=>1]);
		DB::table('logs')->insert($logs);
	}

}