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
        Schema::create('albergue_patrocinadors', function (Blueprint $table) {
            $table->id();
           
           // $table->unsignedInteger('mascota_id');
        
           // $table->foreign('mascota_id')->references('id')->on('mascotas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albergue_patrocinadors');
    }
};
