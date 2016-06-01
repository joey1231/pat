<?php

use Illuminate\Database\Seeder;

class IndeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('indeeds')->insert([
       	[
       		'q'=>'java',
			'l'=>'austin, tx',
			'sort'=>'',
			'radius'=>'',
			'st'=>'',
			'jt'=>'',
			'start'=>'',
			'limit'=>'',
			'fromage'=>'',
			'filter'=>'',
			'latlong'=>'1',
			'co'=>'us',
			'chnl'=>'',
			'userip'=>'1.2.3.4',
			'useragent'=>'Mozilla//4.0(Firefox)',
       	]
       ]);
    }
}
