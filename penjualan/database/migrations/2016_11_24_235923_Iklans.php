<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Iklans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('iklans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->string('phone');
            $table->string('bbm');
            $table->string('address');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->integer('price');
            
             $table->integer('view_count');
              });
              
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('iklans');
    }
}
