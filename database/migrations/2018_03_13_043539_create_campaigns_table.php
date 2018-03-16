<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('judul', 150);
            $table->text('foto');
            $table->integer('target');
            $table->date('deadline');
            $table->string('kategory', 50);
            $table->string('lokasi', 50);
            $table->text('deskCamp');

            $table->foreign('id_user')->references('id')
                                    ->on('users')
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
        Schema::dropIfExists('campaigns');
    }
}
