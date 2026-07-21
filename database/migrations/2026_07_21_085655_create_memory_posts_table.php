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
    Schema::create('memory_posts', function (Blueprint $table) {
        $table->id();
        $table->string('sender_name', 100);
        $table->text('message');
        $table->string('image_path')->nullable();
        $table->unsignedInteger('likes_count')->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memory_posts');
    }
};
