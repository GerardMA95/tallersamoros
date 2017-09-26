<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('short_name');
            $table->string('short_description');
            $table->text('description');
            $table->string('video_url', 150)->nullable()->default(NULL);
            $table->boolean('repair_service')->default(false);
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('patent');
    }
}
