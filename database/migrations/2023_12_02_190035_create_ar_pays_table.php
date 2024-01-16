<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ar_pays', function (Blueprint $table) {
            $table->id();

            $table->integer('amount');
            $table->string('comment')->comment('коментарий')->nullable();

            $table->unsignedBigInteger('ar_tenant_id');
//            $table->foreignId('ar_tenant_id')
//                ->references('id')
//                ->on('ar_tenants')
//                ->cascadeOnDelete()
//            ;

            $table->unsignedBigInteger('ar_object_id');
//            $table->foreignId('ar_object_id')
//                ->references('id')
//                ->on('ar_objects')
//                ->cascadeOnDelete();

            $table->date('date')->comment('дата платежа');

            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_pays');
    }
};
