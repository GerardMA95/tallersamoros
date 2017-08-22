<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('short_name' , 70);
            $table->text('short_description');
            $table->text('description');
            $table->integer('price');
            $table->timestamp('created_at');
            $table->integer('id_category')->unsigned();
            $table->integer('id_patent')->unsigned();
            $table->foreign('id_category')
                ->references('id')->on('category')
                ->onDelete('cascade');
            $table->foreign('id_patent')
                ->references('id')->on('patent')
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
        Schema::dropIfExists('item');
    }
}
