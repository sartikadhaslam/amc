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
        Schema::create('ref_weapons_harga_jual', function (Blueprint $table) {
            $table->id();
            $table->integer('id_weapon');
            $table->integer('id_badside');
            $table->decimal('harga_jual', 15, 2);
            $table->boolean('status')->default(true);
            $table->text('keterangan')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('ref_weapons_harga_jual');
    }
};
