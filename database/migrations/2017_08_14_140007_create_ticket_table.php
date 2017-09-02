<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_budget')->unsigned();
            $table->integer('id_ticket_type')->unsigned();
            $table->foreign('id_budget')
                ->references('id')->on('budget')
                ->onDelete('cascade');
            $table->foreign('id_ticket_type')
                ->references('id')->on('ticket_type')
                ->onDelete('cascade');
            $table->string('email_address', 70);
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
        Schema::dropIfExists('ticket');
    }
}
