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
        Schema::create('podcast', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->constrained('status')->restrictOnDelete();
            $table->foreignId('thumbnail_id')->nullable()->constrained('media_assets')->nullOnDelete();
            $table->foreignId('video_id')->nullable()->constrained('media_assets')->nullOnDelete();
            $table->string('judul');
            $table->string('episode');
            $table->string('host');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcast');
    }
};
