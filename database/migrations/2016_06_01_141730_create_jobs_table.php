<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('jobs',function(Blueprint $table){
			$table->increments('id');
			$table->text('jobtitle')->nullable();
			$table->text('company')->nullable();
			$table->text('city')->nullable();
			$table->text('state')->nullable();
			$table->text('country')->nullable();
			$table->text('formattedLocation')->nullable();
			$table->text('source')->nullable();
			$table->text('date')->nullable();
			$table->text('snippet')->nullable();
			$table->text('url')->nullable();
			$table->text('onmousedown')->nullable();
			$table->text('latitude')->nullable();
			$table->text('longitude')->nullable();
			$table->text('jobkey')->nullable();
			$table->text('sponsored')->nullable();
			$table->text('expired')->nullable();
			$table->text('indeedApply')->nullable();
			
			$table->text('formattedLocationFull')->nullable();
			$table->text('formattedRelativeTime')->nullable();
			$table->text('source_api')->nullable();
			$table->text('type')->nullable();
			$table->text('company_logo')->nullable();
			$table->text('company_url')->nullable();
			$table->text('how_to_apply')->nullable();
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
        Schema::drop('jobs');
    }
}
