<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsCommentTable extends Migration
{
    public function up()
    {
        Schema::create('tickets_comment', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->string('tickets_id');
            $table->string('comment_text');
            $table->string('user_id');
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
        Schema::dropIfExists('ticket_comment');
    }
}
