<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductTypeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('product_type', function($table) {
                    // auto incremental id (PK)
                    // bentuk kemasan sprt susu 400mg dan 800mg, S/M/L/XL/XXL    
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('name', 62);
                    $table->string('description', 100);
                    //merek barang
                    $table->integer('brand');
                               
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
    public function down() {
        //
        Schema::drop('product_type');
    }

}