<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeatBusaOnboardingMigrationV2 extends Migration
{
    public function up()
    {
        Schema::create('seat_busa_onboarding', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('last_update_by');
            $table->longText('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seat_busa_onboarding');
    }
}
