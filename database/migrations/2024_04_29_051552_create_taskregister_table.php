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
        Schema::create('task_register', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('task_content');
            $table->string('task_status');
            $table->string('task_person');
            $table->date('task_start_date');
            $table->date('task_fixed_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_register');
    }
};
