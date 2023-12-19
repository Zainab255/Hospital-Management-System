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
        Schema::create('docter_data', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('DoctorName');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('age');
            $table->string('address');
            $table->string('city');
            $table->string('speciality');
            $table->string('pmdc');
            $table->timestamps(); 

            $table->unsignedBigInteger('deppartments_id');
           

            $table->foreign('deppartments_id')
                  ->references('id')
                  ->on('deppartments');
        });

           

       
    }

    
    public function down(): void
    {
        Schema::dropIfExists('docter_data');
    }
};
