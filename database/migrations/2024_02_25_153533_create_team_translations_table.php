<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('team_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->unsigned();
            $table->string('locale')->index();
            $table->longText('name')->nullable();
            $table->longText('position')->nullable();
            $table->unique(['team_id', 'locale']);
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_translations');
    }
};
