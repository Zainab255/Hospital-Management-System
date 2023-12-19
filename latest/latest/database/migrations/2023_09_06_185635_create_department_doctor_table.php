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
        Schema::create('department_doctor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deppartment_id');
            $table->unsignedBigInteger('docter_data_id');
           
        
            // Define foreign keys
            // $table->foreign('deppartment_id')->references('id')->on('deppartments');
            // $table->foreign('docter_data_id')->references('id')->on('docter_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department_doctor');
    }
};
