<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('users', function($table) {
                    // auto incremental id (PK)
                    $table->increments('id');
                    // varchar 32
                    $table->string('username', 32);
                    $table->string('email', 100);
                    $table->string('password', 64);
                    // int
                    $table->integer('role');
                    // boolean
                    $table->boolean('active');
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
        Schema::drop('users');
    }

}