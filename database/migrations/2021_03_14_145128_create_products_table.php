<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('img');
            $table->integer('price');
            $table->integer('discount');
            $table->string('title');
            $table->string('title_ru');
            $table->string('title_arm');
            $table->string('description');
            $table->string('description_ru');
            $table->string('description_arm');
            $table->string('slug');
            $table->string('slug_ru');
            $table->string('slug_arm');
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('kilograms');
            $table->string('count');
            $table->enum('status',['active','order','no_active']);
            $table->enum('can_add',['yes','no']);
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
        Schema::dropIfExists('products');
    }
}
