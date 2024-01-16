<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ar_payeds', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ar_tenant_id');
            $table->unsignedBigInteger('ar_object_id');

            $table->date('date_start')->comment('старт оплаченного периода');
            $table->date('date_end')->comment('конец оплаченного периода');

            $table->string('comment')->comment('доп описание')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_payeds');
    }
};
