<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('test_results', static function (Blueprint $table) {
            $table->id();
            $table->decimal('ball');
            $table->text('description');
            $table->string('locale');
            $table->unsignedBigInteger('test_id')->index();
            $table->timestamps();

            $table->foreign('test_id')->references('id')->on('tests')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
