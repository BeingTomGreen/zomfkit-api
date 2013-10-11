<?php

use Illuminate\Database\Migrations\Migration;

class CreateSkillActions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skill_actions', function($table) {
			$table->increments('action_id');
			$table->string('action_skill');
			$table->string('action_name');
			$table->string('action_level');
			$table->string('action_experience');
			$table->string('action_members');
			$table->string('action_category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skill_actions');
	}

}