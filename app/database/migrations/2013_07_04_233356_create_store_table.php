<?php

use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('store', function($table) {
                    //Hold the store identitiy
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('name', 62);
                    $table->string('address', 62);
                    $table->string('address2', 62);
                    $table->string('address3', 100)->nullable();
                    $table->string('email', 100);
                    $table->string('postcode', 10);
                    $table->string('city', 30);
                    $table->string('province', 30);
                    $table->string('home_no', 20);
                    $table->string('mobile_no', 20);
                    // Customer Code
                    $table->string('details', 62);
                    $table->string('create_by', 20);
                    $table->string('ip_address', 20);
                    // boolean
                    $table->boolean('active')->default(0);
                    // created_at | updated_at DATETIME                    
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
		//
            Schema::drop('store');
	}

}