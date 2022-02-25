<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffUserEquipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aff__user__equips', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->foreignId("equipe_id")->constrained("equipes");
            $table->foreignId("invitation_par")->constrained('users');
            $table->foreignId("invitation_pour")->constrained("users");



            $table->string('etat')->default("EN_ATTENTE");


            //$table->date('created_at')->default(date("Y-m-d H:i:s"));
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
        Schema::dropIfExists('aff__user__equips');
    }
}
