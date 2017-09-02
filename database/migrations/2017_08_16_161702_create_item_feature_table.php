<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item')->unsigned();
            $table->integer('id_feature')->unsigned();
            $table->foreign('id_item')
                ->references('id')->on('item')
                ->onDelete('cascade');
            $table->foreign('id_feature')
                ->references('id')->on('feature')
                ->onDelete('cascade');
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
        Schema::dropIfExists('item_feature');
    }
}
