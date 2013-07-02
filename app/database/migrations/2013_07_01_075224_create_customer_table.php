<?php

use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('customer', function($table) {
                    // auto incremental id (PK)
                    $table->increments('id');
                    // varchar 32
                    $table->string('code', 20);
                    $table->string('firstname', 32);
                    $table->string('lastname', 32);
                    $table->string('email', 100);
                    $table->string('password', 64);
                    $table->string('address', 100);
                    $table->string('address2', 100);
                    $table->string('address3', 100)->nullable();
                    $table->string('postcode', 10);
                    $table->string('city', 30);
                    $table->string('province', 30);
                    $table->string('home_no', 20);
                    $table->string('mobile_no', 20);
                    // int
                    $table->integer('grup');
                    $table->string('ip_address', 20);
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
        Schema::drop('customer');
    }

}