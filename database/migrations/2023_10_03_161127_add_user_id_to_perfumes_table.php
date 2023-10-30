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
        Schema::table('perfumes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->default(1); // qui aggiungiamo la colonna
            $table->foreign('user_id')->references('id')->on('users'); // vincolo di integrità referenziale : la colonna user_id nella  tabella movies è una chiave esterna che fa riferimento alla colonna id nella tabella users
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perfumes', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // qui elimino il vincolo
            $table->dropColumn('user_id'); // qui elimino la colonna
        });
    }
};
