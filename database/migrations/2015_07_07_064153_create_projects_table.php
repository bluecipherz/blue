<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->integer('cost');
			$table->timestamps();
		});
        Schema::create('tasks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->default(0);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->boolean('completed')->default(false);
            $table->integer('user_id')->unsigned(); // completed by
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('description')->default('');
            $table->timestamps();
        });
        Schema::create('project_users', function(Blueprint $table) // members involved
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('tasks');
		Schema::drop('projects');
	}

}
