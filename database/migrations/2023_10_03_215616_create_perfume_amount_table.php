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
        Schema::create('perfume_amount', function (Blueprint $table) {
            $table->id();
            // capisce in automatico che movie_id deve riferirsi a movies come tabella e id come colonna
            // $table->foreignId('perfume_id')->constrained();
            // $table->foreignId('amount_id')->constrained();

            // Caso: 1 potrei decidere di cancellare a cascata tutti gli articoli appartenenti a quella categoria, quindi quando cancello una quantità, il profumo viene cancellato

            // $table->unsignedBigInteger('perfume_id');
            // $table->foreign('amount_id')->references('id')->on('categories')->onDelete('cascade');

            // Caso: 2 potrei decidere di settare a null il campo user_id, quindi quando cancello un utente, il profumo viene mantenuto e la sua FK, user_id in questo caso, viene settato a null

            // $table->unsignedBigInteger('user_id')->nullable(); 
            // $table->foreign('user_id')->references('id')->on('user')->onDelete('set null');

            // qui decido di cancellare la riga nella tabella pivot nel momento in cui viene cancellato un profumo o una quantità (il prof l'ha fatto con i tags)
            
            $table->foreignId('perfume_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('amount_id')->constrained()->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfume_amount');
    }
};
