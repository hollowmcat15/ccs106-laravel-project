<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('studInfo', function(Blueprint $table) {
            $table -> id();
            $table -> string('firstname');
            $table -> string('middlename');
            $table -> string('lastname');
            $table -> string('suffix');
            $table -> string('address');
            $table->integer('age');
            $table -> date('birthdate');
            $table->enum('gender', ['Male', 'Female', 'Others', 'Prefer not to say']);
            $table->enum('yearlevel', ['First Year', 'Second Year', 'Third Year', 'Fourth Year', 'Fifth Year']);
            $table -> timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('studInfo');
    }
};
