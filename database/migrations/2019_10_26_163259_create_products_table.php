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
            $table->string('use');
            $table->string('name');
            $table->string('description');
            $table->text('long_description');
            $table->integer('thickness');
            $table->float('m2PerContainer');
            $table->float('exWorksCost');
            $table->float('freightCost');
            $table->float('importationCost');
            $table->float('indirectCost');
            $table->float('profit');
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
