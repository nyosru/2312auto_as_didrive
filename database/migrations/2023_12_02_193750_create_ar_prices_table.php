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
        Schema::create('ar_prices', function (Blueprint $table) {

            $table->id();

//            $table->unsignedBigInteger('ar_price_id');
//            $table->foreign('ar_price_id')->references('id')->on('ar_prices');

            $table->unsignedBigInteger('ar_object_id');
//            $table->
//            foreignId('ar_object_id')
////                foreign('ar_object_id')
//                ->references('id')
//                ->on('ar_objects')
////                ->cascadeOnDelete();
//                ->cascadeOnUpdate();
////                ->constrained();

//            $table->foreignId('ar_tenant_id')->constrained();

            $table->unsignedBigInteger('ar_tenant_id');
//            $table->foreignId('ar_tenant_id')
//                ->references('id')
//                ->on('ar_tenants')
////                ->cascadeOnUpdate()
//            ;

            $table->integer('price');
            $table->date('date_start');
            $table->text('opis')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_prices');
    }
};
