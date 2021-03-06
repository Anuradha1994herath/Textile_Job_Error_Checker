<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextilestatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textilestatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Line');
            $table->string('ErrorCode');
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
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
        Schema::dropIfExists('textilestatuses');
    }
}
