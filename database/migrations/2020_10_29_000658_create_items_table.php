<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps(); //created_at e updated_at
            $table->string('name');
            $table->string('photo_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('qty')->default("1")->nullable();
            $table->integer('minimum_qty')->default("1")->nullable();
            $table->decimal('paid_price', 5, 2)->nullable();
            $table->decimal('new_price', 5, 2)->nullable();
            $table->string('category')->nullable();

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id_category')->on('categories');




        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
