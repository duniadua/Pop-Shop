<?php

use Illuminate\Database\Migrations\Migration;

class CreatePaymentStatusTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('payment_status', function($table) {
                    //0 unpay, 1 pay, 2 reject, 3 PO (pending order), 4 Refound tabel-name: payment_status                    
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
        Schema::drop('payment_status');
    }

}