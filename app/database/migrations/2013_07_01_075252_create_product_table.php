<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('product', function($table) {
                    // auto incremental id (PK)
                    $table->increments('id');
                    // varchar 32
                    $table->string('code', 30);
                    $table->string('name', 62);
                    $table->string('description', 100);
                    $table->integer('category', 10);                    
                    $table->string('url', 50);
                    $table->string('image', 50);
                    // deskripsi dari produk
                    $table->text('notes')->nullable();
                    // decimal
                    $table->decimal('price', 15, 2);
                    // int
                    $table->integer('type')->default(0);
                    $table->integer('qty')->default(0);
                    $table->integer('uom')
                            ->default(0)
                            ->nullable();
                    //merek barang
                    $table->integer('brand');
                    $table->integer('min_qty')->default(0);
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
    public function down() {
        //
        Schema::drop('product');
    }

}