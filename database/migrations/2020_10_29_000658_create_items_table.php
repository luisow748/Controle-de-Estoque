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
            $table->string('cod');
            $table->timestamps(); //created_at e updated_at
            $table->string('name');
            $table->string('photo_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('qty')->default("1")->nullable();
            $table->integer('minimum_qty')->default("1")->nullable();
            $table->string('paid_price')->nullable();
            $table->string('new_price')->nullable();
            $table->string('category')->nullable();

            $table->string('location')->nullable();
            $table->string('pb')->nullable();
            $table->string('pl')->nullable();
            $table->string('depth')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('measure_unit')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('tax_type')->nullable();
            $table->string('st')->nullable();

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id_category')->on('categories')->onDelete('cascade');




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
