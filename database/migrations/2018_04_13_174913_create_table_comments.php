<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->text('text');
        //     $table->unsignedInteger('post_id');

        //     $table->foreign('post_id')
        //         ->references('id')
        //         ->on('posts')
        //         ->onDelete('cascade');

        //     $table->timestamps();
            $table->increments('id');
           $table->text('body');
           $table->integer('post_id');
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
        Schema::dropIfExists('comments');
    }
}