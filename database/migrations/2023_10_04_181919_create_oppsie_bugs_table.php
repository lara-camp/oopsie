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
        Schema::create('oppsie_bugs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('body');
            $table->string('url')->nullable();
            $table->string('method')->nullable();
            $table->integer('occurrence');
            // $table->foreignUlid('resolved_by')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->string('status');
            $table->string('additations')->nullable();
            $table->timestamp('snooze_unit')->nullable();
            $table->timestamp('last_occurrence_at')->nullable();
            $table->integer('line_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oppsie_bugs');
    }
};
