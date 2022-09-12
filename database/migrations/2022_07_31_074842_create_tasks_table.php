<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('project_id')->nullable();
            $table->string('module_id')->nullable();
            $table->string('feature_id')->nullable();
            $table->string('department_id')->nullable();
            $table->string('name');
            $table->string('start_date');
            $table->string('dead_line');
            $table->string('end_date');
            $table->string('progressbar');
            $table->string('status');
            $table->string('type');
            $table->string('priority');
            $table->string('work_duration');
            $table->string('working_time');
            $table->string('tag')->nullable();
            $table->string('image');

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
        Schema::dropIfExists('tasks');
    }
}
