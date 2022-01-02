<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('ad_name');
	    $table->text('body');
	    $table->text('replay')->nullable();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->unsignedBigInteger('ad_id');
            $table->timestamps();
	    $table->foreign('ad_id')->references('id')->on('ads')->cascadeOnDelete();
	    $table->foreign('sender_id')->references('id')->on('users')->cascadeOnDelete();
	    $table->foreign('receiver_id')->references('id')->on('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
