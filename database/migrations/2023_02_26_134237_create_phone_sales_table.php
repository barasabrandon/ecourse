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
        Schema::create('phone_sales', function (Blueprint $table) {
            $table->id();    
            $table->integer('author_id');
            $table->string('author_name');        
            $table->string('phone_type');
            $table->string('model');
            $table->string('serial_number');
            $table->string('imei_number');
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
        Schema::dropIfExists('phone_sales');
    }
};
