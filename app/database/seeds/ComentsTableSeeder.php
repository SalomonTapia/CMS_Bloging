<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ComentsTableSeeder extends Seeder {

	public function run()
	{
		$comment=array(['post_id'=>1,'comentario'=>'hola','user_id'=>1, 'created_at'=> new DateTime,'updated_at'=> new DateTime]);
		DB::table('coments')->insert($comment);
	}

}