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
        Schema::table('profile', function (Blueprint $table){
            $table->string('cod_colaborador',3)->change();
            $table->string('cargo',100)->change();
            $table->string('titulo',50)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile', function (Blueprint $table){
            $table->string('cod_colaborador')->change();
            $table->string('cargo')->change();
            $table->string('titulo')->change();
        });
    }
};
