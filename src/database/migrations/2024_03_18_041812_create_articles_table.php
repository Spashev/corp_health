<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', static function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->string('keywords', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('label_url')->nullable();
            $table->unsignedBigInteger('article_category_id')->index()->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('locale');
            $table->timestamps();

            $table->foreign('article_category_id')->references('id')->on('article_categories')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
