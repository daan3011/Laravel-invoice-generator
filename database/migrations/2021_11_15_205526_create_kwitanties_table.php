<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwitantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwitanties', function (Blueprint $table) {
            $table->id();
            $table->string('kwitantie_number');
            $table->string('date');
            $table->string('to');
            $table->enum('is_business', [0, 1]);
            $table->string('adress');
            $table->string('zip_code');
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
        Schema::dropIfExists('kwitanties');
    }
}
