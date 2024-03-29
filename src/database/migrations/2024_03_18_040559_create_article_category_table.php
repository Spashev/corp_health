<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('article_categories', static function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->boolean('is_active')->default(true);
            $table->string('locale');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_categories');
    }
};
