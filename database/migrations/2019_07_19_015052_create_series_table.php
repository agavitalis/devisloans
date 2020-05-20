<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("series_name");
            $table->string("amount");
            $table->string("interest_rate");
            $table->string('total_interest');
            $table->string("duration");
            $table->string("maintenance_fee");
            $table->string("active")->default(1);
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
        Schema::dropIfExists('series');
    }
}
