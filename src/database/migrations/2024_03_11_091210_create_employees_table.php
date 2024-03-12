<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', static function (Blueprint $table) {
            $table->id();
            $table->boolean('full_time')->default(false);
            $table->boolean('part_time')->default(false);
            $table->integer('psychological_consulting')->default(0);
            $table->integer('legal_consulting')->default(0);
            $table->integer('coaching')->default(0);
            $table->integer('concierge_service')->default(0);
            $table->integer('webinars')->default(0);
            $table->unsignedBigInteger('company_id')->index();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
