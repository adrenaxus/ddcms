<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextareasTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textareas', function (Blueprint $table) {
        
            $table->increments('id');
            
            $table->string('textarea');
            $table->string('name');
            
            $table->integer('user_id')->unsigned();
            
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::drop('textareas');
    }
}

