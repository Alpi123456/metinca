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
    Schema::create('pajak_impor', function (Blueprint $table) {

        $table->id();

        $table->foreignId('purchase_order_id')
              ->constrained('purchase_orders')
              ->cascadeOnDelete();

        $table->decimal('bea_masuk',18,2)
              ->default(0);

        $table->decimal('ppn_impor',18,2)
              ->default(0);

        $table->decimal('pph22',18,2)
              ->default(0);

        $table->decimal('total_pajak',18,2)
              ->default(0);

        $table->date('jatuh_tempo')
              ->nullable();

        $table->date('tanggal_bayar')
              ->nullable();

        $table->enum('status',[
            'pending',
            'dibayar',
            'jatuh_tempo',
            'terlambat'
        ])->default('pending');

        $table->timestamps();
    });
}
 /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pajak_impor');
    }
};
