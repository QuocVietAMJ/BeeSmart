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
        Schema::create('cuahang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_store');
            $table->string('Address');
            $table->integer('Member');
            $table->unsignedInteger('id_subCH');
            $table->unsignedInteger('id_loaiCH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuahang');
    }
};
