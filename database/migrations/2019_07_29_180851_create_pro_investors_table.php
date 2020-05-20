<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_investors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user');
            $table->bigInteger('series');
            $table->string('amount');
            $table->string('status')->nullable();
            $table->string('lend_code')->nullable();
            $table->string('fully_matched')->nullable();
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
        Schema::dropIfExists('pro_investors');
    }
}
