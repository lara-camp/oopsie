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
        Schema::create('bhar_phyit_error_logs', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('hash')->index();
            $table->text('title');
            $table->jsonb('body');
            $table->text('url');
            $table->string('method');
            $table->string('line');
            $table->jsonb('error_code_lines')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->string('status');
            $table->jsonb('additionals')->nullable();
            $table->timestamp('snooze_until')->nullable();
            $table->unsignedBigInteger('occurrences')->default(0);
            $table->timestamp('last_occurred_at')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bhar_phyit_error_logs');
    }
};
