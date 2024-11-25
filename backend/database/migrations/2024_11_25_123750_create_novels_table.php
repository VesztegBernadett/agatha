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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string("category",6)->nullable();
            $table->string("hungarian_title",50);
            $table->string("english_title",50);
            $table->integer("year");
            $table->integer("price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};
