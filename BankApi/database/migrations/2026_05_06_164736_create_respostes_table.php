<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('respostes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_pregunta')->constrained()->onDelete('cascade');
            $table->string('text');
            $table->boolean('escorrecta')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostes');
    }
};
