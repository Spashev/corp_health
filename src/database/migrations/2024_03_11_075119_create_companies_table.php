<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', static function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_identify');
            $table->unsignedBigInteger('customer_id')->index();
            $table->string('company_code');
            $table->string('status');
            $table->string('name', 500);
            $table->string('name_en', 500);
            $table->date('contract_period');
            $table->date('signature_date');
            $table->string('feedback_link')->nullable();
            
            $table->boolean('mobile_app')->default(false);
            $table->string('mobile_company_code')->nullable();
            $table->string('mobile_manager_code')->nullable();
            $table->string('mobile_partner_id')->nullable();
            $table->string('mobile_organization_id')->nullable();

            $table->timestamps();
            
            $table->foreign('customer_id')->references('id')->on('customers')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
