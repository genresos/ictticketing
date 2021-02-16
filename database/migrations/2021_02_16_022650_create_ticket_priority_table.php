<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketPriorityTable extends Migration
{
    public function up()
    {
        Schema::create('ticket_priority', function (Blueprint $table) {
            $table->increments('priority_id');
            $table->string('name');
            $table->rememberToken();
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
        Schema::dropIfExists('ticket_priority');
    }
}
