<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pro_investor');
            $table->bigInteger('investor');       
            $table->string('amount');
            $table->string('status')->nullable();
            $table->string('evidence')->nullable();
            $table->string('lend_code')->nullable();
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
        Schema::dropIfExists('investor_matches');
    }
}
