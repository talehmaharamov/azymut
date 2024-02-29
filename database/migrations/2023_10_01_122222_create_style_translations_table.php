<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('style_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('style_id')->unsigned();
            $table->string('locale')->index();
            $table->longText('name');
            $table->longText('alt')->nullable();
            $table->longText('description')->nullable();
            $table->unique(['style_id', 'locale']);
            $table->foreign('style_id')->references('id')->on('styles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('style_translations');
    }
};
