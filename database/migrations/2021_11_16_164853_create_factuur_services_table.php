<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factuur_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factuur_id');
            $table->string('service_title');
            $table->string('service_desc');
            $table->integer('price');
            $table->integer('btw_percentage');
            $table->timestamps();

            $table->foreign('factuur_id')
            ->references('id')
            ->on('facturen')
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
        Schema::dropIfExists('factuur_services');
    }
}
