<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembershipData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_member', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama_member');
            $table->unsignedInteger('jenis_member');
            $table->foreign('jenis_member')->references('id')->on('member');
            $table->string('email')->unique();
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
        Schemas::dropIfExists('data_member');
    }
}
