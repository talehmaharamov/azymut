<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('packages_id')->unsigned();
            $table->string('locale')->index();
            $table->longText('name');
            $table->longText('description');
            $table->unique(['packages_id', 'locale']);
            $table->foreign('packages_id')->references('id')->on('packages')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('packages_translations');
    }
};
