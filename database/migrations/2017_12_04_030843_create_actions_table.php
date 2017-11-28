<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->longText('content');
            $table->string('pic');
            $table->string('day')->nullable();
            $table->time('timestart')->nullable();
            $table->time('timeend')->nullable();
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
        Schema::dropIfExists('actions');
    }
}
