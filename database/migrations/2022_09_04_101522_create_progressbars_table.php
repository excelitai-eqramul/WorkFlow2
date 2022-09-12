<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progressbars', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('progressbar_name')->nullable();
            $table->string('percentage')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            $table->string('estimate')->nullable();

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
        Schema::dropIfExists('progressbars');
    }
}
