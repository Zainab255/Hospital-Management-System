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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('phoneno');
            $table->string('adress');
            $table->string('city');
            $table->string('degree');
            $table->string('institude');
            $table->integer('year');
            $table->string('deppartment');
            $table->string('status');
            $table->string('salary');
            $table->timestamps();
        });
           }

/**
     * Reverse the migrations.
     */
    public function down(): void
    {
                Schema::dropIfExists('staff');
    }
};
