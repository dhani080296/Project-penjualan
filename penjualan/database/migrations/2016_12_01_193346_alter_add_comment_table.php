<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
          $table->integer('iklan_id')->unsigned();
            $table->foreign('iklan_id')->references('id')->on('iklans')->onDelete('restrict');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('iklan_id');
        });
    }
}
