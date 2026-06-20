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
        Schema::table('purchase_orders', function (Blueprint $table) {

            $table->string('nama_barang')->after('supplier_id');

            $table->string('hs_code')->after('nama_barang');

            $table->integer('qty')->after('hs_code');

            $table->decimal('harga_satuan', 18, 2)
                  ->after('qty');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_orders', function (Blueprint $table) {

            $table->dropColumn([
                'nama_barang',
                'hs_code',
                'qty',
                'harga_satuan'
            ]);

        });
    }
};