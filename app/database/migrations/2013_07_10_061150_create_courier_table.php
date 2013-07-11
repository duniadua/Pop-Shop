<?php

use Illuminate\Database\Migrations\Migration;

class CreateCourierTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('courier', function($table) {
                    //Nama2 bank
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('name', 62);
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
    public function down() {
        //
        Schema::drop('courier');
    }

}