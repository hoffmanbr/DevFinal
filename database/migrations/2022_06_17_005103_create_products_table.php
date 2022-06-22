<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name', 200);
            $table->string('internal_code', 20)->unique();
            $table->integer('min_stock_alert', false, true)->nullable(false)->default(0);
            $table->string('description', 300)->nullable();
            $table->decimal('price', 10, 2, true)->nullable(false);
            $table->integer('quantity', false, true)->nullable(false)->default(0);
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
};
