<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffGroupeMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aff__groupe__matches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('groupe_id')->constrained("groupes");
            $table->foreignId('match_id')->constrained('matches');

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
        Schema::dropIfExists('aff__groupe__matches');
    }
}
