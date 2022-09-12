<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('category')->nullable();
            $table->string('department_id')->nullable(); //foreign key
            $table->string('start_date')->nullable();
            $table->string('deadline')->nullable();
            $table->string('assign_employee')->nullable(); //foreign key
            $table->string('notification')->nullable();
            $table->string('upload_image')->nullable();
            $table->string('upload_document')->nullable();
            $table->string('priority')->nullable();
            $table->string('status')->nullable();
            $table->string('budget')->nullable();
            $table->string('client_id')->nullable(); //foreign key

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
        Schema::dropIfExists('projects');
    }
}
