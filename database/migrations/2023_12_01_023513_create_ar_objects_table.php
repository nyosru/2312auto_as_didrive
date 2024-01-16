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
        Schema::create('ar_objects', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->string('nomer')->nullable();
            $table->string('address')->nullable();

            $table->unsignedBigInteger('group_id');
//            $table->foreignId('group_id')
//                ->references('id')
//                ->on('ar_groups')
//                ->cascadeOnDelete();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_objects');
    }
};
