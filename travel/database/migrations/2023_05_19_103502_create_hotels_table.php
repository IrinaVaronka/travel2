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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->decimal('price', 6)->unsigned();
            $table->string('photo', 200)->nullable()->default(null);
            $table->decimal('days', 30)->unsigned();
            $table->string('country', 30);
            $table->foreign('country')->references('title')->on('countries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
