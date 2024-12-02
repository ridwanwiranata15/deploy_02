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
        Schema::create('apotekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_users")->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("nama");
            $table->string("telepon");
            $table->string("Alamat");
            $table->string("str");
            $table->string("shift");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apotekers');
    }
};
