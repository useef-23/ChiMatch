<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {

            $table->bigIncrements("id");


            $table->foreignId('equipe_a')->constrained("equipes");
            $table->foreignId('equipe_b')->constrained("equipes");
            $table->foreignId('created_by')->constrained("users");


            $table->integer("nbr_joueur")->nullable();
            $table->integer("score_a")->default(0);
            $table->integer("score_b")->default(0);
            $table->string("tirane")->nullable();
            $table->boolean('confirmed')->default(false);
            $table->date('date_match');

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
        Schema::dropIfExists('matches');
    }
}
