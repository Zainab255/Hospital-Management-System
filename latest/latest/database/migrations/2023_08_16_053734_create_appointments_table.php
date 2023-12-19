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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dateofbirth');
            $table->string('gender');
            $table->string('email')->unique();
            $table->integer('zipcode');
            $table->integer('phonenumber');
            $table->string('streetaddress');
            $table->string('state');
            $table->string('city');
            $table->string('concern');
            $table->string('department');
            $table->string('doctor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
