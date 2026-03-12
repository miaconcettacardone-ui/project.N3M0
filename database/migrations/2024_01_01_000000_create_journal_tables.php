<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->text('quote');
            $table->string('author');
            $table->string('category');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('vocabs', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->string('pronunciation')->nullable();
            $table->string('part_of_speech');
            $table->text('definition');
            $table->text('example')->nullable();
            $table->string('category')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('vocabs');
    }
};
