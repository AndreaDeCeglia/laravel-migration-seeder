<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_trains', function (Blueprint $table) {
            $table->id();
            $table->string('compagnia', 20);
            $table->string('stPartenza', 20);
            $table->float('oraPartenza', 4, 2);
            $table->string('stArrivo', 20);
            $table->float('oraArrivo', 4, 2);
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
        Schema::dropIfExists('_trains');
    }
}
