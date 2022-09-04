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
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->unsignedBigInteger("fakultas_id")->default(1)->after("id");
            $table->foreign("fakultas_id")->references("id")->on("fakultas")->onDelete("restrict")
            ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropForeign("mahasiswas_fakultas_id_foreign");
            $table->dropForeign("fakultas_id");
        });
    }
};
