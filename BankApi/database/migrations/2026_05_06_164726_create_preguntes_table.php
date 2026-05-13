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
        Schema::create('preguntes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_categoria')->constrained()->onDelete('cascade');
            $table->string('enunciat');
            $table->string('difficultat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntes');
    }
};
