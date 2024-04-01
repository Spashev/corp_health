<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('relatives', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_category_id')->index();
            $table->integer('psychological_consulting')->default(0);
            $table->unsignedBigInteger('company_id')->index();
            $table->integer('legal_consulting')->default(0);
            $table->integer('coaching')->default(0);
            $table->integer('concierge_service')->default(0);
            $table->integer('webinars')->default(0);
            $table->timestamps();
            
            $table->foreign('customer_category_id')->references('id')->on('customer_categories')->cascadeOnDelete();
            $table->foreign('company_id')->references('id')->on('companies')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('relatives');
    }
};
