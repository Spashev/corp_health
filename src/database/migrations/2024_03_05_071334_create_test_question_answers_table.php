<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('test_question_answers', static function (Blueprint $table) {
            $table->id();
            $table->text('answer');
            $table->decimal('ball');
            $table->string('locale');
            $table->unsignedBigInteger('question_id')->index();
            $table->timestamps();
            
            $table->foreign('question_id')->references('id')->on('test_questions')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_question_answers');
    }
};
