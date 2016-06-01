<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('indeeds',function(Blueprint $table){
			$table->increments('id');
			$table->text('q')->nullable();
			$table->text('l')->nullable();
			$table->text('sort')->nullable();
			$table->text('radius')->nullable();
			$table->text('st')->nullable();
			$table->text('jt')->nullable();
			$table->text('start')->nullable();
			$table->text('limit')->nullable();
			$table->text('fromage')->nullable();
			$table->text('filter')->nullable();
			$table->text('latlong')->nullable();
			$table->text('co')->nullable();
			$table->text('chnl')->nullable();
			$table->text('userip')->nullable();
			$table->text('useragent')->nullable();
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('indeeds');
    }
}
