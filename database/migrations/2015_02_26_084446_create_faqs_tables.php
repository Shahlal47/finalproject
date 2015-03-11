<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('category_id')->unsigned()->default(0);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('faq')->default('');
            $table->text('description')->default('');
            $table->boolean('status')->default(0);
            $table->string('created_by')->default('');
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
		Schema::drop('faqs');
	}

}
