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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id');
            // $table->foreign('doctorID')->references('id')->on('doctors');

            $table->string('degTitle');
            $table->string('degName');
            $table->string('university');
            $table->string('city');
            $table->timestamps();

            $table->unsignedBigInteger('docter_data_id'); // Foreign key column

            // Define foreign key relationship
            $table->foreign('docter_data_id')->references('id')->on('docter_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};









