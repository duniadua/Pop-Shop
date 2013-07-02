<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransMasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('trans_master', function($table) {
                    // auto incremental id (PK)
                    // bentuk kemasan sprt susu 400mg dan 800mg, S/M/L/XL/XXL    
                    $table->increments('id');
                    // varchar 32                    
                    $table->string('orderno', 62);
                    // Customer Code
                    $table->string('cust_code', 62);
                    $table->string('courier_code', 62);
                    //0 unpay, 1 pay, 2 reject, 3 PO (pending order), 4 Refound tabel-name: payment_status
                    $table->integer('pay_status')->default(0);
                    //O transfer, 1 cash -table-name payment_type
                    $table->integer('pay_type')->default(0);
                    //bank name
                    $table->integer('bank_type')->default(0);
                    // Total UOM
                    $table->integer('uom')->default(0);
                    $table->decimal('amount', 15, 2);
                    $table->decimal('shipping', 15, 2);
                    $table->decimal('total', 15, 2);
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
	public function down()
	{
		//
            Schema::drop('trans_master');
	}

}