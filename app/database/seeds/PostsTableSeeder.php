<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$Post=array(['titulo'=>'Post bien chido','descripcion'=>'Está bien chido','imagen'=>'Bien loca.jpg',
			'contenido' => 'DDC','tags'=>'no se',
			'created_at'=> new DateTime,'updated_at'=> new DateTime,'user_id'=>1]);

		DB::table('posts')->insert($Post);

		/*
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([

			]);
		}*/
	}

}