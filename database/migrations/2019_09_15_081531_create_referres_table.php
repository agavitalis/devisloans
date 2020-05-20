<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('bonus')->default('0');
            $table->string('referral_paid_count')->default('0');         
            $table->string('mode_of_payment')->nullable();
            $table->string('withdrawal_request')->default('0');
            $table->string('request_status')->default('0');
           
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('referres');
    }
}
