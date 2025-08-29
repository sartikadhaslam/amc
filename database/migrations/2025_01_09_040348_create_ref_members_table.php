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
        Schema::create('ref_members', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('phone', 15);
            $table->date('bod')->nullable();
            $table->string('dc_username', 50);
            $table->string('kunci', 50);
            $table->boolean('aktif', 50)->default(1);
            $table->text('keterangan')->nullable();
            $table->string('foto', 250)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_members');
    }
};
