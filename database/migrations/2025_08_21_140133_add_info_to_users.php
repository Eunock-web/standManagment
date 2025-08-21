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
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname');
            $table->enum('role',['admin','visiteur','entrepreneur_approuvé','entrepreneur_en_attente','entrepreneur_refusé'])->default('visiteur');
            $table->string('phone');
            $table->enum('sexe',['masculin', 'feminin'])->default('masculin');
            $table->text('message')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
