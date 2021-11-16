<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwitantieServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwitantie_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kwitantie_id');
            $table->string('service_title');
            $table->string('service_desc');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('kwitantie_id')
            ->references('id')
            ->on('kwitanties')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kwitantie_services');
    }
}
