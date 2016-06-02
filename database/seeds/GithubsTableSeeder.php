<?php

use Illuminate\Database\Seeder;

class GithubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('githubs')->insert([
       	[
       		'description'=>'java',
			'location'=>'new york',
			
       	]
       ]);
    }
}
