<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('offer', 500);
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->string('locale');
            $table->string('label_url')->nullable();
            $table->string('type')->default('main');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
