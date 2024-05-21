<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teacherinfo', function(Blueprint $table) {
            $table -> id();
            $table -> string('firstname');
            $table -> string('middlename');
            $table -> string('lastname');
            $table -> string('suffix');
            $table -> string('department');
            $table->enum('gender', ['Male', 'Female', 'Others', 'Prefer not to say']);
            $table->enum('profession', ['Professor', 'Associate Professor', 'Assistant Professor', 'Lecturer', 'Instructor']);
            $table -> timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacherinfo');
    }
};
