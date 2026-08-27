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
            $table->foreignId('status_id')->constrained('status');
            $table->foreignId('thumbnail_id')->constrained('media_assets');
            $table->foreignId('video_id')->constrained('media_assets');
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
