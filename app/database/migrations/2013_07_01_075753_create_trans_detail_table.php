<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransDetailTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('trans_detail', function($table) {
                    // auto incremental id (PK)
                    // bentuk kemasan sprt susu 400mg dan 800mg, S/M/L/XL/XXL    
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('orderno', 62);
                    // Customer Code
                    $table->string('prd_code', 62);
                    $table->integer('qty');
                    $table->integer('sp');
                    $table->integer('uom');
                    $table->decimal('price', 15, 2);
                    $table->string('ip_address', 20);
                    // boolean
                    $table->boolean('active')->default(0);
                    // created_at | updated_at DATETIME
                    $table->dateTime('trans_date');
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
        Schema::drop('trans_detail');
    }

}