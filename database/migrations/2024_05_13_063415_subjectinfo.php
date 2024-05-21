<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjects', function(Blueprint $table) {
            $table->id();
            $table->string('subjectname');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('yearlevel', ['First Year', 'Second Year', 'Third Year', 'Fourth Year', 'Fifth Year']);
            $table->unsignedBigInteger('teacher_id'); // Foreign key reference to the teachers table
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teacherinfo')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};

