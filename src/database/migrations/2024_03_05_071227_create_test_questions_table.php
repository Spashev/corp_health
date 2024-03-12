<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('test_questions', static function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('locale');
            $table->unsignedBigInteger('test_id')->index();
            $table->timestamps();

            $table->foreign('test_id')->references('id')->on('tests')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_questions');
    }
};
