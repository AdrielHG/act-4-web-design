<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('Project_ID');
        $table->string('project_name');
        $table->date('start_date');
        $table->date('end_date');
        $table->unsignedBigInteger('Responsible_ID');
        $table->timestamps();

        $table->foreign('Responsible_ID')->references('Employee_ID')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
