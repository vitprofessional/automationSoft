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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('emailAddress')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('address')->nullable();
            $table->string('fName')->nullable();
            $table->string('mName')->nullable();
            $table->string('sName')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('religion')->nullable();
            $table->string('refance')->nullable();
            $table->string('salary')->nullable();
            $table->string('blGroup')->nullable();
            $table->string('district')->nullable();
            $table->string('position')->nullable();
            $table->string('joiningDate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
