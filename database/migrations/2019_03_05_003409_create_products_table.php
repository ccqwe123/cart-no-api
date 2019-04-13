<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('product_name');
            $table->text('product_description');
            $table->decimal('price', 18, 4);
            $table->string('payment_method');
            $table->string('return_item');
            $table->string('location');
            $table->string('address')->nullable();
            $table->double('latitude',10,7)->nullable();
            $table->double('longitude',10,7)->nullable();
            $table->enum('status', ['0','1'])->default('0');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::drop('products');
    }
}
