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
        Schema::create('clinical_interests', function (Blueprint $table) {
            $table->id();
            $table->string('clinicalInterest');

            $table->unsignedBigInteger('docter_data_id'); // Foreign key column

            // Define foreign key relationship
            $table->foreign('docter_data_id')->references('id')->on('docter_data')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinical_interests');
    }
};