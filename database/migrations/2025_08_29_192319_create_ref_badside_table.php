<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_badside', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 50);
            $table->string('nama', 100);
            $table->string('keterangan', 255)->nullable();
            $table->string('cp', 100)->nullable();
            $table->string('phone', 50)->nullable();
            $table->boolean('aktif')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_badside');
    }
};
