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
    {  Schema::create('paniers', function (Blueprint $table) {
        $table->id('id_panier');
        
        $table->foreignId('user_id')
        ->constrained('users')
        ->onUpdate('cascade')
        ->onDelete('cascade');
    
    $table->foreignId('produit_id')
        ->constrained('produits')
        ->onUpdate('cascade')
        ->onDelete('cascade');
    
    $table->unsignedInteger('quantite');
    
    $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('panier');
}
};
