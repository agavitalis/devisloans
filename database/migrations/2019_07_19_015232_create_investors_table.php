<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('user');
            $table->bigInteger('series');
            $table->string('date_invested');
            $table->string('date_cashout');
            $table->string('amount_invested');

            $table->string('rate');
            $table->string('roi');
            $table->string('maintenace_fee');
            $table->string('withdrawable_bal');

            $table->string('cashout_request')->default('0');
            $table->string('cashout_mode')->default('0');

            $table->string('fully_merged')->default('0');
            $table->string('request_status')->default('0');
            $table->string('visibility')->default('1');
            $table->string('finalized_on')->nullable();


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
        Schema::dropIfExists('investors');
    }
}
