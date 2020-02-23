<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('use')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->text('long_description')->nullable();
            $table->integer('thickness')->nullable();
            $table->float('m2PerContainer')->nullable();
            $table->float('cipCost')->nullable();
            $table->float('indirectCost')->nullable();
            $table->float('profit')->nullable();
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
