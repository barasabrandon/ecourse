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
        Schema::create('accessories_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id');
            $table->string('author_name');
            $table->string('type');
            $table->integer('serial_number')->nullable();
            $table->integer('buying_price');
            $table->integer('selling_price');
            $table->integer('profit'); 
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
        Schema::dropIfExists('accessories_sales');
    }
};
