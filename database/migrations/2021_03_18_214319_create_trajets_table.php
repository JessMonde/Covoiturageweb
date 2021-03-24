<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('Id_users');
            // $table->foreign('Id_users')->references('id')->on('utilisateurs');
            $table->string('Nom_trajet');
            $table->string('ville_depart');
            $table->string('ville_Arrive');
            $table->integer('Heure_depart');
            $table->integer('Heure_Arrive');
            $table->integer('Nbr_Place_dispo');
            $table->string('voiture');
            $table->date('Date');
            $table->double('Prix');
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
        Schema::dropIfExists('trajets');
    }
}
