<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_users');
            $table->unsignedBigInteger('Id_trajet');
            $table->foreign('Id_users')->references('id')->on('utilisateurs');
            $table->foreign('Id_trajet')->references('id')->on('trajets');
            $table->unsignedBigInteger('place');
            $table->double('prix');
            $table->double('prix_total');
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
        Schema::dropIfExists('reservations');
    }
}
