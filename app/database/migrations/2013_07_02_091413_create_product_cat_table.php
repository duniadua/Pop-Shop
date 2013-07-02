<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductCatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('product_cat', function($table) {
                    // auto incremental id (PK)
                    $table->increments('id');
                    // varchar 32
                    $table->string('code', 30);
                    $table->string('name', 62);
                    $table->string('description', 100);
                    // bentuk kemasan sprt susu 400mg dan 800mg
                    $table->integer('type')->default(0);
                    //merek barang
                    $table->integer('brand');                    
                    //point special
                    $table->integer('sp')->default(0);
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
            Schema::drop('product_cat');
	}

}