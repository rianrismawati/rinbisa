<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_camp');
            $table->integer('id_user');
            $table->integer('nominalD');
            $table->string('komentD', 200);
            $table->date('tglD');
            $table->string('transferVia', 50);
            $table->string('status', 30);  
            $table->foreign('id_camp')->references('id')
                                      ->on('campaigns')
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
        Schema::dropIfExists('table_donations');
    }
}
