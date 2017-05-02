<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThisRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('this_routes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('startPoint');
                $table->string('endPoint');
                $table->string('vehicles');
                $table->string('cost');
                $table->string('time');
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
        Schema::dropIfExists('this_routes');
    }
}
