<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductBrandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('product_brand', function($table) {
                    // auto incremental id (PK)
                    // Merek Barang
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('name', 62);
                    $table->string('description', 100);                
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
            Schema::drop('product_brand');
	}

}